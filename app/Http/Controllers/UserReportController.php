<?php

namespace App\Http\Controllers;

use App\userreport;
use Illuminate\Http\Request;

class UserReportController extends Controller
{
 
    public function reportgenaration()
    {
        return view('user.reportgenaration.userreport');
    }

   
    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }


    public function show(userreport $userreport)
    {
        //
    }

    
    public function edit(userreport $userreport)
    {
        //
    }

    public function update(Request $request, userreport $userreport)
    {
        //
    }


    public function destroy(userreport $userreport)
    {
        //
    }
}
