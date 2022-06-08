@extends('frontend.master')
@section('title')
Job Web| All Companies
@endsection
@section('content')
<section id="jobs">
    <div class="container">
      <h3>All Companies</h3>
      <div class="company-details">
        <table class="table card-table table-vcenter text-nowrap datatable">
            <thead>
              <tr>
                <th class="w-1">SL No. <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-sm text-dark icon-thick" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><polyline points="6 15 12 9 18 15" /></svg>
                </th>
                <th>Company Name</th>
                <th>Company Address</th>
                <th>Company phone No</th>
                <th>Company Email</th>
                <th>Company Active Status</th>
                <th>Action</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              @php($i = 1)
              @foreach($company as $all_company)

              <tr>
              <td>{{$i++}}</td>
                <td><span class="text-muted">{{$all_company->company_name}}</span></td>
                <td>{{$all_company->company_adderss}}</a></td>
                <td>

                  {{$all_company->company_phoneNo}}
                </td>
                <td>
                  {{$all_company->company_email}}
                </td>
                <td>
                  {{$all_company->company_status}}
                </td>
                <td>
                  <form action="">
                  <a class="btn btn-secondary" href="#">Print</a>
                 </form>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
      </div>


    </div>
  </section>

    </section>
@endsection
