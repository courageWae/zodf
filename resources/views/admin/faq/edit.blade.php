@extends('admin.app')

@section('main')

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Reply Question</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Reply Question</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>

  <!-- /.content-header -->

  <div class="row">
    <!-- left column -->
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Reply Question</h3>
        </div>
        <div class="card-body">
          <form action="{{ route('postreply', $q->id) }}" method="post">
            @csrf
            <div class="form-group">
              <label for="">Question</label>
              <input type="text" value="{{ $q->question }}" class="form-control" name="question">
            </div>
            <div class="form-group">
              <label for="">Answer</label>
              <textarea name="answer" id="" cols="30" rows="10" class="form-control">{{ $q->answer }}</textarea>
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-success">Submit</button>
            </div>
          </form>
        </div>
      </div>
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