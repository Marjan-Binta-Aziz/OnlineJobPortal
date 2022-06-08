@extends('admin.master')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Report</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">user-report</li>
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
                <h3 class="card-title">User Report</h3>
              </div>
              <!-- /.card-header -->

                  <div class="table-responsive">
                    <table class="table card-table table-vcenter text-nowrap datatable">
                      <thead>
                        <tr>
                          <th class="w-1">SL No. <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-sm text-dark icon-thick" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><polyline points="6 15 12 9 18 15" /></svg>
                          </th>
                          <th>User Name</th>
                          <th>User Email</th>
                          <th>User Phone No.</th>
                          <th>Nationality</th>
                          <th>Job Title <small>(applied)</small></th>
                          <th>Ruseme</th>
                          <th>Action</th>
                          <th></th>
                        </tr>
                      </thead>
                      <tbody>
                        @php($i = 1)
                        @foreach($user as $all_user)

                        <tr>
                        <td>{{$i++}}</td>
                          <td><span class="text-muted">{{$all_user->name}}</span></td>
                          <td>{{$all_user->email}}</a></td>
                          <td>

                            {{$all_user->txtMobile}}
                          </td>
                          <td>
                            {{$all_user->country}}
                          </td>
                          <td>
                            {{$all_user->sex}}
                          </td>
                          <td>
                            {{$all_user->file}}
                          </td>
                          <td>
                            <form action="">

                            <a class="btn btn-secondary" href="{{url('/user_report/view', $all_user->id)}}">Show</a>
                            <a href="{{ asset($all_user->file) }}" class="btn btn-general btn-white">Download Resume</a>
                           </form>
                          </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>

            </div>
          </div>
          <button type="button" class="btn btn-dark">Print</button>
        </div>
      </div>
    </section>
  </div>
  <div class="d-flex justify-content-center">
    {!! $user->links() !!}
</div>
@endsection
