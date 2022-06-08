@extends('admin.master')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>All Companais Details</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">companies_details</li>
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
          <h3 class="card-title">Companies Details</h3>

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
                      <th>Companies Name</th>
                      <th>Companies Mail</th>
                      <th>Companies Phone No</th>
                      <th>Companies Address</th>
                      <th class="text-center">Companies Status</th>
                      <th style="width: 20%" class="text-center">Action</th>
                  </tr>
              </thead>
              <tbody>
                @php($i = 1)
                  @foreach($companies as $allcompanies)
                  <tr>
                    <td>{{$i++}}</td>
                    <td>{{$allcompanies->company_name}}</td>
                    <td>{{$allcompanies->company_email}}</td>
                    <td>{{$allcompanies->company_phoneNo}}</td>
                    <td>{{$allcompanies->company_adderss}}</td>
                    <td>{{$allcompanies->company_status}}</td>
                      <td class="project-actions text-right">
                          <a class="btn btn-outline-info btn-sm" data-toggle="tooltip" data-placement="right" title="Edit" href="{{route('admin.editcompanies' , $allcompanies->id)}}">
                            <i class="fas fa-pencil-alt"></i></a>
                          <form action="{{url('/companies/destroy', $allcompanies->id)}}" method="GET" onclick="return confirm('Are you sure to delete?')">
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
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection

