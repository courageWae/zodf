@extends('admin/app')

@section('headSection')
<link rel="stylesheet" href="{{ asset('admin/plugins/datatables-bs4/css/dataTables.bootstrap4.css') }}">

@endsection

@section('main')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1>Post Page</h1>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active">Post Page</li>
                </ol>
              </div>
            </div>
          </div><!-- /.container-fluid -->
        </section>


        <section class="content">
                      <div class="card">
                          <div class="card-header">
                            <h3 class="card-title">All Posts</h3>
                            {{-- @can('posts.create', Auth::user()) --}}
                            <a class='offset-5 btn btn-success' href="{{ route('showcreatenews') }}">Add New</a>
                            {{-- @endcan --}}
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                                  <i class="fas fa-minus"></i></button>

                              </div>
                          </div>
                          <!-- /.card-header -->
                          <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                              <thead>
                              <tr>
                                <th>P.No</th>
                                <th>Title</th>
                                <th>Sub title</th>
                                <th>Slug</th>
                                <th>Created Date</th>
                                <th>Edit</th>
                                <th>Delete</th>
                              </tr>
                              </thead>
                              <tbody>

                                  @foreach ($posts as $post)
                                  <tr>
                                      <td>{{ $loop->index + 1 }}</td>
                                      <td>{{ $post->title }}</td>
                                      <td>{{ $post->subtitle }}</td>
                                      <td>{{ $post->slug }}</td>
                                      <td>{{ $post->created_at->diffForHumans() }}</td>
                                      <td><a href="{{ route('editnews',$post->id) }}"><span class="fas fa-edit"></span></a></td>
                                      <td>
                                          <form method="POST" id="delete-form-{{ $post->id }}" action="{{ route('destroynews', $post->id) }}" style="display:none">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}
                                        </form>

                                        <a href="" onclick="
                                            if(confirm('Are you sure you want to delete this?'))
                                            {
                                                event.preventDefault();
                                                document.getElementById('delete-form-{{ $post->id }}').submit();
                                            }else
                                            {
                                                event.preventDefault();
                                            }" ><span class="fas fa-trash-alt"></span>
                                        </a>
                                        </td>
                                  </tr>
                                  @endforeach
                              </tbody>
                              <tfoot>
                              <tr>
                                    <th>P.No</th>
                                    <th>Title</th>
                                    <th>Sub title</th>
                                    <th>Slug</th>
                                    <th>Created Date</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                              </tr>
                              </tfoot>
                            </table>
                          </div>
                          <!-- /.card-body -->
                        </div>
              </section>
      </div>
      <!-- /.content-wrapper -->
@endsection

@section('footerSection')
<script src="{{ asset('admin/plugins/datatables/jquery.dataTables.js') }}"></script>
<script src="{{ asset('admin/plugins/datatables-bs4/js/dataTables.bootstrap4.js') }}"></script>
<script>
    $(function () {
      $("#example1").DataTable();
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
      });
    });
  </script>
@endsection
