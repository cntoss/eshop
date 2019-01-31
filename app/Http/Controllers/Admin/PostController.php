<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Post;
use App\Model\Category;
use Session;
use File;
use Auth;
class PostController extends Controller
{
    public function index()
    {
        $posts=Post::all();
        return view('admin.posts.index',compact('posts'));
    }

    public function create()
    {
        $categories=Category::where('status',1)->get();
        return view('admin.posts.create',compact('categories'));
    }

    public function store(Request $request)
    {
        
        request()->validate([
            'title'=>'required|max:60',
            'description'=>'required',
            'image'=>'image|mimes:jpg,png,jpeg,gif|max:2048',
            'status'=>'required',
            'category_id'=>'required'
        ]);

        $post=new Post();
        $post->title=$title=$request->title;
        $post->description=$request->description;
        $post->status=$request->status;
        $post->slug=str_slug($title);
        $post->category_id=$request->category_id;
        $post->user_id = Auth()->id();
        if($request->hasFile('image')){
            $image=$request->file('image');
            $new_name=rand().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('/images'),$new_name);
            $post->image=$new_name;
        }
        $post->save();
        Session::flash('msg',"Category was created successfully");
        return redirect()->route('admin.posts.index');
   
    }

    public function show($id)
    {
    $id=Auth::user()->id;
    $post=::Post::where('id',$id)->first();
    return view('admin.posts.show',compact('post'));
    }

    public function edit($id)
    {
        $posts=Post::where('id',$id)->first();
        $categories=Category::where('status',1)->get();
        return view('admin.posts.edit',compact('posts','categories'));
    }

    public function update(Request $request, $id)
    {
        request()->validate([
            'title'=>'required|max:60',
            'description'=>'required',
            'image'=>'image|mimes:jpg,png,jpeg,gif|max:2048',
            'status'=>'required',
            'category_id'=>'required'
        ]);
        $posts=Post::findOrFail($id);
        $posts->title=$title=$request->title;
        $posts->description=$request->description;
        $posts->status=$request->status;
        $posts->slug=str_slug($title);
        $posts->category_id=$request->category_id;
        if($request->hasFile('image')){
            if(File::exists('images/'.$posts->image)&& $posts->image!='avatar.jpg'){
                unlink('images/'.$posts->image);
            }
            $image=$request->file('image');
            $new_name=rand().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('/images'),$new_name);
            $posts->image=$new_name;
        }
        $posts->save();
        Session::flash('msg',"Post was Updated successfully");
        return redirect()->route('admin.posts.index');
       }

    public function destroy($id)
    {
        $post=Post::where('id',$id)->first();
        if(File::exists('images/'.$post->image)){
            unlink(('images/'.$post->image));
        }
        $post->delete();
        Session::flash('msg',"Post Deleted Successfully");
        return redirect()->route('admin.posts.index');

    }
}
