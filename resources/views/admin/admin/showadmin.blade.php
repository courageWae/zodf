@extends('admin.app')

@section('main')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Admin</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">All Admins</li>
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
                        <h3 class="card-title">All Admins</h3>
                        <span><a class="btn btn-primary" href="{{ route('registration') }}">Add New Admin</a></span>
                    </div>
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Created date</th>
                                    {{-- <th>View</th> --}}
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($admins as $insurer)
                                <tr>
                                    <td>{{ $insurer->id }}</td>
                                    <td>{{ $insurer->name }}</td>
                                    <td>{{ $insurer->email }}</td>
                                    <td>{{ $insurer->phone }}</td>
                                    <td>{{ $insurer->created_at->diffForHumans() }}</td>
                                    {{-- <td><a href="{{ route('showadmin',$insurer->id) }}"><span class="fas fa-eye"></span></a></td> --}}
                                    <td>
                                        <form method="POST" id="delete-form-{{ $insurer->id }}"
                                            action="{{ route('destroyadmin',$insurer->id) }}" style="display:none">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}
                                        </form>
                                        <a href="{{ route('destroyadmin',$insurer->id) }}" onclick="
                                        if(confirm('Are you sure you want to delete this?'))
                                        {
                                            event.preventDefault();
                                            document.getElementById('delete-form-{{ $insurer->id }}').submit();
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
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Created date</th>
                                    {{-- <th>View</th> --}}
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
