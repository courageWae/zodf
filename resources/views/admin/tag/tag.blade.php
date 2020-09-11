@extends('admin/app')

@section('main')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1>Tag Page</h1>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active">Tag Page</li>
                </ol>
              </div>
            </div>
          </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">

          <!-- Default box -->
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Add Tag</h3>
              <a class='offset-5 btn btn-warning' href="{{ route('indextag') }}">View All Tags</a>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fas fa-minus"></i></button>
              </div>
            </div>
            <div class="card-body">
                <form action="{{ route('storetag') }}" method="post">
                    {{ csrf_field() }}
                    {{-- @include('includes.messages') --}}

                    <div class="form-group">
                      <label for="tag">Tag Name</label>
                      <input type="text" name="name" class="form-control" placeholder="tag">
                    </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <a type="buttom" href='{{ route('indextag') }}' class="btn btn-warning">View All Tags</a>

      </form>
            </div>
            <!-- /.card-footer-->
          </div>
          <!-- /.card -->

        </section>
        <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->
@endsection
