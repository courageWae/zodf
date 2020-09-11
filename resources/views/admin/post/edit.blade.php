@extends('admin/app')

@section('headSection')
<link rel="stylesheet" href="{{ asset('admin/plugins/select2/css/select2.min.css') }}">
@endsection

@section('main')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1>Blog Page</h1>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active">Blog Page</li>
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
              <h3 class="card-title">Add Blog</h3>
              <a class='offset-5 btn btn-warning' href="{{ route('showallnews') }}">View All Posts</a>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fas fa-minus"></i></button>

              </div>
            </div>
            <div class="card-body">
                <form action="{{ route('updatenews', $post->id) }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}
                    {{-- @include('includes.messages') --}}

                    <div class="form-group">
                      <label for="title">Title</label>
                      <input type="text" value="{{ $post->title }}" name="title" class="form-control" placeholder="title">
                    </div>
                    <div class="form-group">
                            <label for="title">Sub Title</label>
                            <input type="text" value="{{ $post->subtitle }}" name="subtitle" class="form-control" placeholder="subtitle">
                          </div>

                    <div class="form-group">
                        <label for="title">Image</label>
                    <input  type="file" name="image">
                    </div>
                    <div class="form-check">
                      <input @if ($post->status==1) checked @endif type="checkbox" name="status" value="1" class="form-check-input" id="exampleCheck1">
                      <label class="form-check-label">Publish</label>
                    </div>
                    <div class="form-group">
                            <label>Select Tags</label>
                            <select name="tags[]" class="select2" multiple="multiple" data-placeholder="Select a State" style="width: 100%;">
                                    @foreach ($tags as $tag)
                                    <option value="{{ $tag->id }}"
                                        @foreach ($post->tags as $postTag)
                                            @if($postTag->id==$tag->id)
                                                selected
                                                @endif
                                        @endforeach>{{ $tag->name }}</option>
                                    @endforeach
                            </select>
                          </div>
                          <div class="form-group">
                                <label>Select Categories</label>
                                <select name="categories[]" class="select2" multiple="multiple" data-placeholder="Select a State" style="width: 100%;">
                                    @foreach ($categories as $category)
                                    <option value="{{ $category->id }}"
                                            @foreach ($post->categories as $postCategory)
                                            @if($postCategory->id==$category->id)
                                                selected
                                                @endif
                                        @endforeach>{{ $category->name }}</option>
                                    @endforeach
                                </select>
                              </div>
                  </div>

            <div class="card-body pad">

            <div class="mb-3">
                <textarea class="textarea" name="body" placeholder="Place some text here"
                        style="width: 100%; height: 500px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{ $post->body }}</textarea>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
            <a type="buttom" href='{{ route('showallnews') }}' class="btn btn-warning">View All Posts</a>
        </div>
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

@section('footerSection')
    <script src="{{ asset('admin/plugins/select2/js/select2.full.min.js') }}"></script>
    <script>
            $(document).ready(function(){
                //Initialize Select2 Elements
            $('.select2').select2()

            //Initialize Select2 Elements
            $('.select2bs4').select2({
            theme: 'bootstrap4'
            })
            });
        </script>
@endsection

