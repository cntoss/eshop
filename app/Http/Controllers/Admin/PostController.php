<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Post;
use App\Model\Category;
use Session;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts=Post::all();
        return view('admin.posts.index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories=Category::where('status',1)->get();
        return view('admin.posts.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
