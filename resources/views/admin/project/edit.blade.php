@extends('admin.app')

@section('main')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Edit Project</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item active">Edit Project</li>
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
                        <h3 class="card-title">Edit Project</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('editproject',$project->id) }}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="">Project Name</label>
                                        <input type="text" class="form-control" name="name" value="{{ $project->name }}">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="">Project Price</label>
                                        <input type="text" class="form-control" name="price" value="{{ $project->price }}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for="">Certificate</label>
                                        <select class="form-control" name="certificate" id=""  value="{{ $project->certificate }}">
                                            <option value="yes">Yes</option>
                                            <option value="no">No</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for="">Project Duration (Hours)</label>
                                        <input type="number" class="form-control" name="duration" value="{{ $project->duration }}">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for="">Number Of Project Materials</label>
                                        <input type="number" class="form-control" name="materials" value="{{ $project->materials }}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                  <div class="form-group">
                                    <label for="">Number Of Lesson</label>
                                    <input type="number" class="form-control" name="lesson" value="{{ $project->lesson }}">
                                </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="">Number Of Days</label>
                                        <input type="text" class="form-control" name="days" value="{{ $project->days }}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                              <div class="col-6">
                                  <div class="form-group">
                                      <label for="">Prequisite</label>
                                      <input type="text" class="form-control" name="prequisite" value="{{ $project->prequisite }}">
                                  </div>
                              </div>
                              <div class="col-6">
                                  <div class="form-group">
                                      <label for="">Languages</label>
                                      <input type="text" class="form-control" name="language" value="{{ $project->language }}">
                                  </div>
                              </div>
                          </div>
                          <div class="row">
                            <div class="col-4">
                                <div class="form-group">
                                    <label for="">Skill</label>
                                    <input type="text" class="form-control" name="skill" value="{{ $project->skill }}">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group">
                                    <label for="">Assessment</label>
                                    <input type="text" class="form-control" name="assessment" value="{{ $project->assessment }}">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group">
                                    <label for="">Location</label>
                                    <input type="text" class="form-control" name="location" value="{{ $project->location }}">
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="">Project Start Date</label>
                                    <input type="date" class="form-control" name="startdate" value="{{ $project->startdate }}">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="">Project End Date</label>
                                    <input type="date" class="form-control" name="closingdate" value="{{ $project->closingdate }}">
                                </div>
                            </div>
                        </div>
                            <div class="form-group">
                                <label for="">Course Description</label>
                                <textarea name="description" class="form-control" id="" cols="30" rows="10">{{ $project->description }}"</textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-success">Submit</button>
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
