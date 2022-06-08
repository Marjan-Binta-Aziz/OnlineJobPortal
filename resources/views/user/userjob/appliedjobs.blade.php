@extends('user.master')
@section('content')
<div class="content-wrapper">
  <div class="page">
      <div class="content">
        <div class="container-xl">
          <!-- Page title -->
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Applied Jobs</h3>
                </div>
                <div class="table-responsive">
                  <table class="table card-table table-vcenter text-nowrap datatable">
                    <thead>
                      <tr>
                        <th>SL No</th>
                        <th>Job Title</th>
                        <th>Company Name</th>
                        <th>Company Location</th>
                        <th>Expected Salary</th>
                        <th>Applied Date</th>
                        <th>Application Deadline</th>
                        <th>Action</th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                        @php($i = 1)
                        @foreach($apply as $all_apply)
                      <tr>
                        <td>{{$i++}}</td>
                        <td>{{$all_apply->job_title}}</td>
                        <td>{{$all_apply->company_name}}</td>
                        <td>{{$all_apply->location}}</td>
                        <td>{{$all_apply->expected_salary}}</td>
                        <td>{{$all_apply->created_at}}</td>
                        <td>{{$all_apply->application_deadline}}</td>
                        <td><button class="btn btn success">Print</button></td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
              <button type="button" class="btn btn-dark">Print</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  {{-- <div class="d-flex justify-content-center">
    {!! $job->links() !!}
</div> --}}
    <!-- Libs JS -->
    <!-- Tabler Core -->
    <script src="./dist/js/tabler.min.js"></script>
    @endsection
