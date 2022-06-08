<?php

namespace App\Http\Controllers;
use DB;
use App\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{

    public function index()
    {
        //
    }
    public function addblog()
    {

        return view('admin.blog.addblog');
    }

    public function create()
    {
        {
            return view('admin.blog.addblog');
        }
    }
    public function view()
    {
        {
            $blog = DB::table('blogs')->get();
            return view('admin.blog.viewblog', compact('blog'));
        }
    }

    public function store(Request $request)
    {
        $request->validate([
            'blog_name' => 'required',
            'blog_description' => 'required',
            'blog_status' => 'required',
        ]);

        $blog=array();
        $blog['blog_name'] = $request->blog_name;
        $blog['blog_photo']=$request->blog_photo;
        $blog['blog_description']=$request->blog_description;
        $blog['blog_status'] = $request->blog_status;
        DB::table('blogs')->insert($blog);

        return redirect()->route('admin.viewblog')
                        ->with('success','Blog info created successfully.');


        if($request->hasFile('blog_photo')){
        $image= $request->file('blog_photo');
        $reimage = time().'.'.$image->getClientOriginalExtension();
        $dest=public_path('frontend/file/cv/');
        $image->move($dest,$reimage);
        }else{
            return redirect('/viewblog')->with('success','Blog info created successfully.');
        }
    }


    public function frontblog()

    {
        $blog = DB::table('blogs')->get();
        $cat = DB::table('categories')->get();
            return view('frontend.blog.blog', compact('blog', 'cat'));
    }


    public function edit($id)
    {
        $blog = Blog::find($id);
        return view('admin.blog.editblog',compact('blog'));
    }


    public function update(Request $request, $id)
    {
        $blog = Blog::find($request->id);
        $blog->blog_name = $request->blog_name;
        $blog->blog_photo = $request->blog_photo;
        $blog->blog_description = $request->blog_description;
        $blog->blog_status = $request->blog_status;
        $blog->save();
        return redirect()->route('admin.addblog')
                        ->with('success','Blog information updated successfully');
    }


    public function destroy($id)
    {
        $blog = Blog::where('id',$id)->first();
        $blog->delete();
        return redirect()->route('admin.viewblog')
                        ->with('success','Blog information Delected Successfully');
    }
}
