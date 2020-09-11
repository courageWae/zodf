@extends('admin.app')

@section('main')

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Single Motor Quote</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Single Motor Quote</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>

  <!-- /.content-header -->
  <section class="content">
    <div class="container-fluid">
  <div class="row">
    <!-- left column -->
    <div class="col-md-12">

  <!-- general form elements -->
  <div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">single Motor Quote</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    
    <div class="card-body">
      <div class="row">
        <div class="col-6">
          <div class="form-group">
            <label for="exampleInputEmail1">Customer Name</label>
          <input type="text" class="form-control" name="date" value="{{ $message->name }}" disabled>
          </div>
        </div>
        <div class="col-6">
          <div class="form-group">
            <label for="exampleInputEmail1">Email</label>
            <input type="text" value="{{ $message->email }}" class="form-control" disabled>
          </div>
        </div>
        <div class="col-12">
          <div class="form-group">
            <label for="exampleInputEmail1">Subject</label>
            <input type="text" value="{{ $message->subject }}" class="form-control" disabled>
          </div>
        </div>
      
        <div class="col-12">
          <div class="form-group">
            <label for="exampleInputEmail1">Messages</label>
            <textarea name="" class="form-control" id="" cols="30" rows="10" disabled>{{ $message->message }}</textarea>
          </div>
        </div>
    </div>
  </div>

</div>

</div>

</div>
</section>
<!-- /.card -->
</div>
 
    
@endsection