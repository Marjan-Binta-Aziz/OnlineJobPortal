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
                        <th>Applying Date</th>
                        <th>Available Job</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>1</td>
                        <td>fg</td>
                        <td>13 May 2018</td>
                        <td>$940</td>
                    </tr>
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
