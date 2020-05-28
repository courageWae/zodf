@extends('broker.app')

@section('main')

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Add Motor Policy</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Add Motor Policy</li>
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
      <h3 class="card-title">Add New Motor Policy</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    
    <form role="form">
      <div class="card-body">
        <label for="">Basic Information</label>
        <div class="row">
          <div class="col-6">
            <div class="form-group">
              <label for="exampleInputEmail1">Date</label>
              <input type="date" class="form-control" name="date" value="{{ Carbon\Carbon::now()->toDateTimeString() }}">
            </div>
          </div>
          <div class="col-6">
            <div class="form-group">
              <label for="exampleInputEmail1">Branch</label>
              <select class="form-control" name="branch_id" id="">
                <option value="" disabled>Select Branch</option>
                @foreach ($branches as $branch)
                <option value="{{ $branch->name }}">{{ $branch->name }}</option>
                @endforeach
              </select>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-6">
            <div class="form-group">
              <label for="exampleInputEmail1">Insurance Company</label>
              <select class="form-control" name="insurer_id" id="">
                <option value="" disabled>Select Insurance Company</option>
                @foreach ($insurers as $insurer)
                <option value="{{ $insurer->name }}">{{ $insurer->name }}</option>
                @endforeach
              </select>
            </div>
          </div>
          <div class="col-6">
            <div class="form-group">
              <label for="exampleInputEmail1">Commission Rate</label>
              <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
            </div>
          </div>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Client Name</label>
          <select class="form-control" name="user_id" id="">
            <option value="" disabled>Select Client Name</option>
            @foreach ($users as $user)
                <option value="{{ $user->name }}">{{ $user->name }}</option>
                @endforeach
          </select>
        </div>
        <hr>
        <label for="">Policy Information</label>
        <div class="row">
          <div class="col-6">
            <div class="form-group">
              <label for="exampleInputEmail1">Policy Number</label>
              <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
            </div>
          </div>
          <div class="col-6">
            <div class="form-group">
              <label for="exampleInputEmail1">Registration Number</label>
              <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-6">
            <div class="form-group">
              <label for="exampleInputEmail1">Commentment Date</label>
              <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
            </div>
          </div>
          <div class="col-6">
            <div class="form-group">
              <label for="exampleInputEmail1">Expiring Date</label>
              <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-6">
            <div class="form-group">
              <label for="exampleInputEmail1">Risk Type</label>
              <select class="form-control" name="risktype_id" id="">
                <option value="" disabled>Select Risk Type</option>
                @foreach ($risktypes as $risktype)
                <option value="{{ $risktype->name }}">{{ $risktype->name }}</option>
                @endforeach
              </select>
            </div>
          </div>
          <div class="col-6">
            <div class="form-group">
              <label for="exampleInputEmail1">Business Type</label>
              <select class="form-control" name="user_id" id="">
                <option value="" disabled>Select Business Type</option>
                @foreach ($businesstypes as $businesstype)
                <option value="{{ $businesstype->id }}">{{ $businesstype->name }}</option>
                @endforeach
              </select>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-6">
            <div class="form-group">
              <label for="exampleInputEmail1">Currency</label>
              <select class="form-control" name="user_id" id="">
                <option value="" disabled>Select Currency</option>
                @foreach ($currencies as $currency)
                <option value="{{ $currency->id }}">{{ $currency->name }}</option>
                @endforeach
              </select>
            </div>
          </div>
          <div class="col-6">
            <div class="form-group">
              <label for="exampleInputEmail1">Exhange Rate</label>
              <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-6">
            <div class="form-group">
              <label for="exampleInputEmail1">Sum Assured</label>
              <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
            </div>
          </div>
          <div class="col-6">
            <div class="form-group">
              <label for="exampleInputEmail1">Premium</label>
              <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-6">
            <div class="form-group">
              <label for="exampleInputEmail1">NIC Charges</label>
              <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
            </div>
          </div>
          <div class="col-6">
            <div class="form-group">
              <label for="exampleInputEmail1">Relationship Officer</label>
              <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
            </div>
          </div>
        </div>
      </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
  </div>

</div>

</div>

</div>
</section>
<!-- /.card -->
</div>
 
    
@endsection