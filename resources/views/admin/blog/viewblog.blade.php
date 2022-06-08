@extends('admin.master')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Blogs</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">blogs</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
      <section>
        @if ($message = Session::get('success'))
      <div class="alert alert-success">
        <p>{{$message}}</p>
      </div>
      @endif
      </section>
      <!-- Default box -->
      <div class="card card-info">
        <div class="card-header">
          <h3 class="card-title">Blog</h3>
          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
          <div class="card-body p-0">
          <table class="table table-striped projects">
              <thead>
                  <tr>
                      <th>SL No</th>
                      <th>Blog Name</th>
                      <th>Blog Photo</th>
                      <th>Blog Description</th>
                      <th class="text-center">blog Status</th>
                      <th style="width: 20%" class="text-center">Action</th>
                  </tr>
              </thead>
              <tbody>
                @php($i = 1)
                  @foreach($blog as $all_blog)
                  <tr>
                    <td>{{$i++}}</td>
                    <td>{{$all_blog->blog_name}}</td>
                    <td>{{$all_blog->blog_photo}}</td>
                    <td>{{$all_blog->blog_description}}</td>
                    <td>{{$all_blog->blog_status}}</td>
                      <td class="project-actions text-right">
                          <a class="btn btn-outline-info btn-sm" data-toggle="tooltip" data-placement="right" title="Edit" href="{{route('admin.editblog' , $all_blog->id)}}">
                          <i class="fas fa-pencil-alt"></i></a>
                          <form action="{{url('/blog/destroy', $all_blog->id)}}" method="GET" onclick="return confirm('Are you sure to delect?')">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-outline-danger btn-sm" data-toggle="tooltip" data-placement="left" title="Delete" type="submit" id="del" ><i class="fas fa-trash"></i> </button>
                        </form>
                      </td>
                  </tr>
                @endforeach
              </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection