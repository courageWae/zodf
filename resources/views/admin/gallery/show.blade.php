@extends('admin.app')

@section('main')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Gallery</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Gallery</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Add New Courses</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('savegallery') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="">Image</label>
                                <input type="file" class="form-control" name="image[]" multiple>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-success">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">All Courses</h3>
                    </div>
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Images</th>
                                    {{-- <th>Edit</th> --}}
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($gallery as $role)
                                <tr>
                                    <td>{{$role->id}}</td>
                                    {{-- src="{{ url('storage/images/'.$article->image) }}" --}}
                                    <td><img src="{{ asset('/public/image/'.$role->image) }}" style="width: 100px" alt=""></td>
                                    {{-- <td><a href=""><span class="fas fa-edit"></span></a></td> --}}
                                    <td>
                                        <form method="POST" id="delete-form-{{ $role->id }}"  action="{{ route('destroygallery',$role->id) }}"
                                            style="display:none">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}
                                        </form>

                                        <a href="" onclick="
                                        if(confirm('Are you sure you want to delete this?'))
                                        {
                                            event.preventDefault();
                                            document.getElementById('delete-form-{{ $role->id }}').submit();
                                        }else
                                        {
                                            event.preventDefault();
                                        }"><span class="fas fa-trash-alt"></span>
                                        </a>
                                    </td>
                                </tr>
                                @endforeach

                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>#</th>
                                    <th>Images</th>
                                    {{-- <th>Edit</th> --}}
                                    <th>Delete</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>

            </div>
            <!-- /.card -->
        </div>
        <!-- /.col -->
</div>
<!-- /.row -->
</section>
<!-- /.content -->


@endsection
