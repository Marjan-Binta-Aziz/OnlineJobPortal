@extends('admin.master')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Manage Jobs</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Manage Job</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <section class="content">
      <section>
        @if ($message = Session::get('success'))
      <div class="alert alert-success">
        <p>{{$message}}</p>
      </div>
      @endif
     </section>
      <div class="container-fluid" >
        <div class="row">
          <div class="col-12">
            <div class="card card-info">
              <div class="card-header ">
                <h3 class="card-title">Manage Jobs</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0" style="height: 100%;">
                <table class="table table-head-fixed text-nowrap">
                  <thead>
                    <tr>
                      <th style="width:8%">Sl No</th>
                      <th>Job Title</th>
                      <th>Company Name</th>
                      <th>Job Location</th>
                      <th>Application Deadline</th>
                      <th class="text-center">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  @php($i = 1)
                  @foreach($job as $jobs)
                    <tr>
                    <td>{{$i++}}</td>
                    <td>{{$jobs->job_title}}</td>
                    <td>{{$jobs->company_name}}</td>
                    <td>{{$jobs->location}}</td>
                    <td>{{$jobs->application_deadline}}</td>                   
                    <td>                     
                    <a class="btn btn-secondary" href="{{route('admin.jobshow',  $jobs->id)}}">Show</a>
                    <a class="btn btn-secondary" href="{{route('admin.jobupdate',  $jobs->id)}}">Edit</a>
                   <form action="{{url('/job/destroy', $jobs->id)}}" method="GET" onclick="return confirm('Are you sure to delect?')"> 
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
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
      {{-- {!! $jobs->links() !!} --}}
    </section>
  </div> 
@endsection