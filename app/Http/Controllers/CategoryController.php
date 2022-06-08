<?php

namespace App\Http\Controllers;
use DB;
use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        return view('admin.index.index');
    }

    public function viewcategory()
    {
        $cat = DB::table('categories')->get();
        return view('admin.category.viewcategory',compact('cat'));
    }

    public function addcategory()
    {

            return view('admin.category.addcategory');
    }


    public function create()
    {
        {
            return view('admin.catagory.addcategory');
        }
    }


    public function store(Request $request)
    {
        $request->validate([
            'c_name' => 'required',
            'c_status' => 'required',
        ]);

        $data=array();
        $data['c_name']=$request->c_name;
        $data['c_status']=$request->c_status;
        DB::table('categories')->insert($data);

        return redirect()->route('admin.viewcategory')
                        ->with('success','Category info created successfully.');
    }


    public function show($id)
    {
        // $cat = Category::find($id);
        // return view('admin.category.viewcategory', compact('cat'));
    }


    public function edit($id)
    {
        $cat = Category::find($id);
        return view('admin.category.editcategory',compact('cat'));
    }


    public function update(Request $request, $id)
    {
        $cat = Category::find($request->id);
        $cat->c_name = $request->c_name;
        $cat->c_status = $request->c_status;
        $cat->save();
        return redirect()->route('admin.viewcategory')
                        ->with('success','Categories info updated successfully');
    }


    public function destroy($id)
    {
        $cat = Category::where('id',$id)->first();
        $cat->delete();
        return redirect()->route('admin.viewcategory')
                        ->with('success','Category Info Delected Successfully');
    }
}
