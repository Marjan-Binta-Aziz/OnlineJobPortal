<?php

namespace App\Http\Controllers;
use DB;
use App\Report;
use App\User;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
    public function userreport()
    {
        $user = DB::table('users')
        ->where('is_admin', '0')->orderBy('id', 'DESC')->paginate(5);
    	return view('admin.report.user',compact('user') );
    }

    // public function view()
    // {
    //     $all_user = DB::table('users')
    //     ->where('is_admin', '0')
    //     ->get();
    // 	return view('admin.report.single_user',compact('all_user') );
    // }
    public function view($id)
    {
        $all_user = User::find($id);
        return view('admin.report.single_user', compact('all_user'));
    }


    public function companiesreport()
    {

    	return view('admin.report.companies-report');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function show(Report $report)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function edit(Report $report)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Report $report)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function destroy(Report $report)
    {
        //
    }
}
