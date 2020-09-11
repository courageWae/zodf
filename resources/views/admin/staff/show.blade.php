@extends('admin.app')

@section('main')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Steering</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Steering</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <section class="content">
        <div class="row">
            <div class="col-6">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Staff</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('savestaff') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="">Team Type</label>
                                        <select class="form-control" name="team" id="">
                                            <option value="The Board">The Board</option>
                                            <option value="The Executive Management">The Executive Management</option>
                                            <option value="Staff">Staff</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="">Name</label>
                                        <input type="text" class="form-control" name="name">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="">Position</label>
                                        <input type="text" class="form-control" name="position">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="">Arrangement</label>
                                        <input type="number" class="form-control" placeholder="number on roll - eg:5" name="arrangement">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="">Organisation</label>
                                        <input type="text" class="form-control" name="organization">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="">Image</label>
                                        <input type="file" class="form-control" name="image">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="">Department</label>
                                        <input type="text" class="form-control" name="department">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="">Profile</label>
                                <textarea class="form-control" name="description" id="" cols="30" rows="10"></textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-success">Submit</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.card-body -->
                </div>

            </div>
            <div class="col-6">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">The Board</h3>
                    </div>
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($board as $steering)
                                <tr>
                                    <td>{{$steering->id}}</td>
                                    <td>{{$steering->name}}</td>
                                    <td><a href="{{ route('showstaff',$steering->id) }}"><span
                                                class="fas fa-edit"></span></a></td>
                                    <td>
                                        <form method="POST" id="delete-form-{{ $steering->id }}"
                                            action="{{ route('destroystaff',$steering->id) }}" style="display:none">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}
                                        </form>
                                        <a href="{{ route('destroystaff',$steering->id) }}" onclick="
                                        if(confirm('Are you sure you want to delete this?'))
                                        {
                                            event.preventDefault();
                                            document.getElementById('delete-form-{{ $steering->id }}').submit();
                                        }else
                                        {
                                            event.preventDefault();
                                        }">
                                        <span class="fas fa-trash-alt"></span>
                                        </a>
                                    </td>
                                </tr>
                                @endforeach

                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">The Executive Management</h3>
                    </div>
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($management as $steering)
                                <tr>
                                    <td>{{$steering->id}}</td>
                                    <td>{{$steering->name}}</td>
                                    <td><a href="{{ route('showstaff',$steering->id) }}"><span
                                                class="fas fa-edit"></span></a></td>
                                    <td>
                                        <form method="POST" id="delete-form-{{ $steering->id }}"
                                            action="{{ route('destroystaff',$steering->id) }}" style="display:none">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}
                                        </form>
                                        <a href="{{ route('destroystaff',$steering->id) }}" onclick="
                                        if(confirm('Are you sure you want to delete this?'))
                                        {
                                            event.preventDefault();
                                            document.getElementById('delete-form-{{ $steering->id }}').submit();
                                        }else
                                        {
                                            event.preventDefault();
                                        }">
                                        <span class="fas fa-trash-alt"></span>
                                        </a>
                                    </td>
                                </tr>
                                @endforeach

                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Staff</h3>
                    </div>
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($staff as $steering)
                                <tr>
                                    <td>{{$steering->id}}</td>
                                    <td>{{$steering->name}}</td>
                                    <td><a href="{{ route('showstaff',$steering->id) }}"><span
                                                class="fas fa-edit"></span></a></td>
                                    <td>
                                        <form method="POST" id="delete-form-{{ $steering->id }}"
                                            action="{{ route('destroystaff',$steering->id) }}" style="display:none">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}
                                        </form>
                                        <a href="{{ route('destroystaff',$steering->id) }}" onclick="
                                        if(confirm('Are you sure you want to delete this?'))
                                        {
                                            event.preventDefault();
                                            document.getElementById('delete-form-{{ $steering->id }}').submit();
                                        }else
                                        {
                                            event.preventDefault();
                                        }">
                                        <span class="fas fa-trash-alt"></span>
                                        </a>
                                    </td>
                                </tr>
                                @endforeach

                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Edit</th>
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
