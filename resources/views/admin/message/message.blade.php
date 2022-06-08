@extends('admin.master')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>All Message</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">User Messages</li>
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
          <h3 class="card-title">User Messages</h3>

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
                      <th>User's Name</th>
                      <th>User's Email</th>
                      <th>Subject</th>
                      <th>Body</th>
                      <th style="width: 20%" class="text-center">Action</th>
                  </tr>
              </thead>
              <tbody>
                @php($i = 1)
                  @foreach($messages as $allmessage)
                  <tr>
                    <td>{{$i++}}</td>
                    <td>{{$allmessage->name}}</td>
                    <td>{{$allmessage->email}}</td>
                    <td>{{$allmessage->subject}}</td>
                    <td>{{$allmessage->body}}</td>
                      <td class="project-actions text-right">
                        <a class="btn btn-outline-info btn-ml" data-toggle="tooltip" data-placement="right" title="Edit" href="{{url('/message/view', $allmessage->id)}}"> View</a>
                        <form action="{{url('/message/destroy', $allmessage->id)}}" method="GET" onclick="return confirm('Are you sure to delect?')">
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
        <!-- /.card-body -->
      </div>
      <button type="button" class="btn btn-dark">Print</button>
      <!-- /.card -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection

