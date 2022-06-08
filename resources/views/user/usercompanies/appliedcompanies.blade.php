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
                <h3 class="card-title">Applied Companies</h3>
                </div>
                <div class="table-responsive">
                <table class="table card-table table-vcenter text-nowrap datatable">
                    <thead>
                    <tr>
                        <th>SL No</th>
                        <th>Company Name</th>
                        <th>Company Email</th>
                        <th>Company Phone</th>
                        <th>Company Location</th>
                        <th>Applying Date</th>
                        <th>Total Job</th>
                    </tr>
                    </thead>
                    <tbody>
                        @php($i = 1)
                        @foreach($apply as $all_apply)
                    <tr>
                        <td>{{$i++}}</td>
                        <td>{{$all_apply->company_name}}</td>
                        <td>{{$all_apply->email}}</td>
                        <td>{{$all_apply->txtMobile}}</td>
                        <td>{{$all_apply->location}}</td>
                        <td>{{$all_apply->created_at}}</td>
                        <td>2</td>
                    </tr>
                    </tbody>
                    @endforeach
                </table>
                </div>
            </div>
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
