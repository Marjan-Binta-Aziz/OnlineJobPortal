@extends('admin.master')
@section('extra-js')
<script>
    CKEDITOR.replace( 'blogdescription' );
</script>
@endsection
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add a New Blog</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">add_blog</li>
            </ol>
          </div>
          <div class="col-sm-12">
            <section>
              <br>
              @if ($message = Session::get('success'))
            <div class="alert alert-success">
              <p>{{$message}}</p>
            </div>
            @endif
          </section>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Blogs</h3>
              </div>
            <form action="{{url('/blog/store')}}" enctype="multipart/form-data" method="POST">
                @csrf
                <div class="card-body">
                <div class="form-group">
                  <label for="blog_name">Blog Name</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-hand-point-right"></i></span>
                    </div>
                    <input type="text" class="form-control" name="blog_name" id="blog_name" placeholder="Input Blog Name" >
                </div>
                <br>
                <div class="form-group">  
                  <label for="blog_photo" class="form-label">Blog Photo</label>
                  <div class="custom-file">
                    <input type="file" class="custom-file-input" id="blog_photo" name="blog_photo">
                    <label class="custom-file-label" for="blog_photo">Choose Photo</label>
                  </div>
                </div>
                <div class="mb-3">
                    <label for="blog_description" class="form-label">Blog Description</label>
                    <textarea class="form-control" name="blog_description" id="blog_description"  placeholder="Write here"></textarea>
                  </div>
                </div>
                <section> <br>
                  <label for="blog_status" class="form-label">Blog Status</label><br>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="blog_status" id="blog_status" value="Active" checked>
                    <label class="form-check-label" for="blog_status">Active</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="blog_status" id="blog_status" value="Inactive">
                    <label class="form-check-label" for="blog_status">Inactive</label>
                  </div>
                  </section>
                  <section><br><br>
                    <div>
                    <button type="submit" class="btn btn-info">Submit</button>
                  </div>
                </form>
                </section>
              </div>
              <!-- /.card-body -->
            </div>
          </div>
          <!-- /.col (right) -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection
