@extends('admin.app')

@section('main')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Add Project</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item active">Add Project</li>
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
                        <h3 class="card-title">Steering</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('editstaff',$steering->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
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
                                        <input type="text" value="{{ $steering->name }}" class="form-control" name="name">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="">Position</label>
                                        <input type="text" value="{{ $steering->position }}" class="form-control" name="position">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="">Arrangement</label>
                                        <input type="number" value="{{ $steering->arrangement }}" class="form-control" name="arrangement">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="">Organisation</label>
                                        <input type="text" class="form-control" value="{{ $steering->organisation }}" name="organization">
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
                                        <input type="text" class="form-control" value="{{ $steering->department }}" name="department">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="">Profile</label>
                                <textarea class="form-control" name="description" id="" cols="30" rows="10">{{ $steering->description }}</textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-success">Submit</button>
                            </div>
                        </form>
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
