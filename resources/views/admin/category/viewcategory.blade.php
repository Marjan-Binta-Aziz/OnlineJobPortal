@extends('admin.master')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">categorydetails</li>
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
          <div class="col-12">
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Category Details</h3>
                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 160px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0" style="height: 100%;">
                <table class="table table-head-fixed text-nowrap">
                  <thead>
                    <tr>
                      <th>SL no</th>
                      <th>Category Name</th>
                      <th>Category Status</th>
                      <th class="text-center">Action</th> 
                    </tr>
                  </thead>
                  <tbody>
                  @php($i = 1)
                  @foreach($cat as $all_cat)
                    <tr>
                      <td>{{$i++}}</td>
                      <td>{{$all_cat->c_name}}</td>
                      <td>{{$all_cat->c_status}}</td>
                          <td class="project-actions text-center">                                                
                            <a class="btn btn-outline-info btn-ml" data-toggle="tooltip" data-placement="right" title="Edit" href="{{route('admin.cat_edit' , $all_cat->id)}}"> <i class="fas fa-pencil-alt"></i> </a>
                            <form action="{{url('/category/destroy', $all_cat->id)}}" method="GET" onclick="return confirm('Are you sure to delect?')">       
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-outline-danger btn-ml" data-toggle="tooltip" data-placement="left" title="Delete" type="submit" id="del" ><i class="fas fa-trash"></i> </button>
                          </form>
                          </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
@endsection
