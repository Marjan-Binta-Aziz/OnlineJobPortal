<?php

namespace App\Http\Controllers;
use DB;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{

    public function user()
    {

    	return view('user.index.index');

    }

    public function update(Request $request)
    {
        $user = User::find(auth()->user()->id);
        $validator = Validator::make(request()->all(), [
            'file'   => 'required| mimes:pdf|max:2048',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        if ($request->hasFile('file')) {
            // uploading image
            $profilePicture = $request->file('file');
            $imageName = $profilePicture->getClientOriginalName();
            $directory = 'frontend/file/cv/';
            $imgUrl = $directory.$imageName;
            $profilePicture->move($directory, $imageName);
            // data sent to database
            $user->file = $imgUrl;
            $user->f_name=$request->f_name;
            $user->lname=$request->lname;
            $user->father=$request->father;
            $user->mother=$request->mother;
            $user->dob=$request->dob;
            $user->sex=$request->sex;
            $user->religion=$request->religion;
            $user->cboMStatus=$request->cboMStatus;
            $user->country=$request->country;
            $user->nid=$request->nid;
            $user->passport=$request->passport;
            $user->blood=$request->blood;
            $user->txtMobile=$request->txtMobile;
            $user->s_email=$request->s_email;
            $user->save();
            return redirect()->back()->with('Success', 'user is successfully added');
        }
            $user->f_name=$request->f_name;
            $user->lname=$request->lname;
            $user->father=$request->father;
            $user->mother=$request->mother;
            $user->dob=$request->dob;
            $user->sex=$request->sex;
            $user->religion=$request->religion;
            $user->cboMStatus=$request->cboMStatus;
            $user->country=$request->country;
            $user->nid=$request->nid;
            $user->passport=$request->passport;
            $user->blood=$request->blood;
            $user->txtMobile=$request->txtMobile;
            $user->s_email=$request->s_email;
            $user->save();
            return redirect()->back();
    }

    public function show(User $user)
    {
        //
    }

    public function edit(User $user)
    {
        //
    }



    public function destroy(User $user)
    {
        //
    }
}
