@extends('admin.app')

@section('main')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">View Student</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item active">View Student</li>
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
                        <h3 class="card-title">View Student</h3>
                    </div>
                    <div class="card-body">
                        <form action="" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for="">First Name</label>
                                        <input type="text" class="form-control" disabled
                                            value="{{ $student->firstname }}">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for="">Sur Name</label>
                                        <input type="text" class="form-control" disabled
                                        value="{{ $student->surname }}">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for="">Other Name</label>
                                        <input type="text" class="form-control" disabled
                                        value="{{ $student->othername }}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for="">Email</label>
                                        <input type="text" class="form-control" value="{{ $student->email }}"disabled>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for="">Phone</label>
                                        <input type="text" class="form-control" name="duration" value="{{ $student->phone }}"disabled>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for="">Gender</label>
                                        <input type="text" class="form-control" name="duration" value="{{ $student->gender }}"disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                  <div class="form-group">
                                    <label for="">Age</label>
                                    <input type="text" value="{{ $student->age }}" class="form-control"disabled>
                                </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for="">Region</label>
                                        <input type="text" class="form-control" value="{{ $student->region }}"disabled>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for="">Religion</label>
                                        <input type="text" class="form-control" value="{{ $student->religion }}"disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                              <div class="col-4">
                                  <div class="form-group">
                                      <label for="">Zongo Community</label>
                                      <input type="text" class="form-control" value="{{ $student->zongo }}"disabled>
                                  </div>
                              </div>
                              <div class="col-4">
                                  <div class="form-group">
                                      <label for="">Education level</label>
                                      <input type="text" class="form-control" value="{{ $student->education }}"disabled>
                                  </div>
                              </div>
                              <div class="col-4">
                                <div class="form-group">
                                    <label for="">Employment Status</label>
                                    <input type="text" class="form-control" value="{{ $student->employment }}"disabled>
                                </div>
                            </div>
                          </div>
                        </form>
                    </div>
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
