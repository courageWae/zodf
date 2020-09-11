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
                        <h3 class="card-title col-sm-2">Register students</h3>

                        @php
                            $p_id = $project_id;
                            // dd($p_id);
                        @endphp
                        {{-- <a href="{{ route('exportsdata',$p_id) }}" class="btn btn-success col-sm-2">Export data</a> --}}
                        <a href="{{ route('registered') }}" class="btn btn-info col-sm-2">View All Data</a>
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
                                    {{-- <th>Project</th> --}}
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
                                    {{-- <td>{{$project[0]->name}}</td> --}}
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
                                    {{-- <th>Project</th> --}}
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
                        <form action="{{}}" method="POST" enctype="multipart/form-data">
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
