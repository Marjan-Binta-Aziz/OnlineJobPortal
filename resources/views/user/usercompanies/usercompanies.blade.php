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
                <h3 class="card-title">All Companies</h3>
                </div>
                <div class="table-responsive">
                <table class="table card-table table-vcenter text-nowrap datatable">
                    <thead>
                    <tr>
                        <th>SL No</th>
                      <th>Companies Name</th>
                      <th>Companies Mail</th>
                      <th>Companies Phone No</th>
                      <th>Companies Address</th>
                      <th class="text-center">Companies Status</th>
                    </tr>
                    </thead>
                    <tbody>
                        @php($i = 1)
                        @foreach($companies as $allcompanies)
                  <tr>
                    <tr>
                    <td>{{$i++}}</td>
                    <td>{{$allcompanies->company_name}}</td>
                    <td>{{$allcompanies->company_email}}</td>
                    <td>{{$allcompanies->company_phoneNo}}</td>
                    <td>{{$allcompanies->company_adderss}}</td>
                    <td>{{$allcompanies->company_status}}</td>
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
    <!-- Libs JS -->
    <!-- Tabler Core -->
    <script src="./dist/js/tabler.min.js"></script>
    @endsection
