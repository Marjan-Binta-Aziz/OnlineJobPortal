<?php

namespace App\Http\Controllers;
use App\User;
use App\userinfo;
use Illuminate\Http\Request;

class UserInfoController extends Controller
{
    public function updateprofile()
    {
        $all_user = User::find(auth()->user()->id);
       return view('user.userinfo.updateprofile',compact('all_user'));
    }
    public function showuserprofile()
    {
        $all_user = User::find(auth()->user()->id);
       return view('user.userinfo.showuserprofile',compact('all_user'));
    }




    public function store(Request $request)
    {
        //
    }


    public function show(userinfo $userinfo)
    {
        //
    }

    public function edit(userinfo $userinfo)
    {
        //
    }
    public function update(Request $request, userinfo $userinfo)
    {
        //
    }

    public function destroy(userinfo $userinfo)
    {
        //
    }
}
