@extends('admin.app')

@section('main')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Register students</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Register students</li>
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
                        <h3 class="card-title">All Projects</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            @foreach ($projects as $project)
                            @php
                                $p_id = $project->id;
                                $countproject = count(App\Model\User\Student::where('project_id',$p_id)->get());
                                $countmale = count(App\Model\User\Student::where('project_id',$p_id)->where('gender','Male')->get());
                                $countfemale = count(App\Model\User\Student::where('project_id',$p_id)->where('gender','Femail')->get());
                                // dd($countproject);
                            @endphp
                        <div class="col-3">
                            <!-- small box -->
                            <div class="small-box bg-success">
                              <div class="inner">
                                <h6>{{ $project->name }}</h6>
                                <p>{{ $countproject }} Students</p>
                                <p>{{ $countmale }} Males</p>
                                <p>{{ $countfemale }} Females</p>
                              </div>
                              <div class="icon">
                                <i class="ion ion-stats-bars"></i>
                              </div>
                              <a href="{{ route('single',$project->id) }}" class="small-box-footer">View Registered Student <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                          </div>
                        @endforeach
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>

            </div>
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title col-sm-2">Register students</h3>
                        <a href="{{ route('exportdata') }}" class="btn btn-success col-sm-3">Export All data into excel</a>
                    </div>
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>First Name</th>
                                    <th>Sur Name</th>
                                    <th>Other Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Age</th>
                                    <th>Zongo</th>
                                    <th>Project</th>
                                    <th>View</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($students as $student)
                                @php
                                    $project_id = $student->project_id;
                                    
                                    $project=App\Model\Admin\Project::where('id',$project_id)->get();

                                @endphp
                                <tr>
                                    <td>{{$student->id}}</td>
                                    <td>{{$student->firstname}}</td>
                                    <td>{{$student->surname}}</td>
                                    <td>{{$student->othername}}</td>
                                    <td>{{$student->email}}</td>
                                    <td>{{$student->phone}}</td>
                                    <td>{{$student->age}}</td>
                                    <td>{{$student->zongo}}</td>
                                    <td>{{$project[0]->name}}</td>
                                    <td><a href="{{ route('viewregistered',$student->id) }}"><span class="fas fa-eye"></span></a></td>
                                    
                                </tr>
                                @endforeach

                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>#</th>
                                    <th>First Name</th>
                                    <th>Sur Name</th>
                                    <th>Other Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Age</th>
                                    <th>Zongo</th>
                                    <th>Project</th>
                                    <th>View</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>

            </div>
            {{-- <div class="col-3">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Import students</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('importdata') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="file" name="file" class="form-control">
                            <br>
                            <button class="btn btn-success">Import Student Data</button>
                        </form>
                    </div>
                    <!-- /.card-body -->
                </div>

            </div> --}}
            <!-- /.card -->
        </div>
        <!-- /.col -->
</div>
<!-- /.row -->
</section>
<!-- /.content -->


@endsection
