@extends('admin.app')

@section('main')

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Messages</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Messages</li>
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
            <h3 class="card-title">Messages</h3>
          </div>
    <div class="card-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>#</th>
          <th>Name</th>
          <th>Email</th>
          <th>Subject</th>
          <th>Message</th>
          <th>Date</th>
          <th>View</th>
        </tr>
        </thead>
        <tbody>
        
            @foreach ($messages as $message)
            <tr>
              <td>{{$message->id}}</td>
             <td>{{$message->name}}</td>
             <td>{{$message->email}}</td>
             <td>{{$message->subject}}</td>
             <td>{{$message->message}}</td>
             <td>{{$message->created_at->diffForHumans()}}</td>
             <td><a href="{{ route('contactdetail',$message->id) }}"><span class="fas fa-eye"></span></a></td>
            </tr>
            @endforeach
        
        </tbody>
        <tfoot>
            <tr>
              <th>#</th>
              <th>Name</th>
              <th>Email</th>
              <th>Subject</th>
              <th>Message</th>
              <th>Date</th>
              <th>View</th>
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