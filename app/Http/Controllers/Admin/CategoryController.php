<?php

namespace App\Http\Controllers\Admin;
use App\Model\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;

class CategoryController extends Controller
{
   public function index()
    {
        $category= Category::all();
        return view('admin.categories.index',compact('category'));
    }

    public function create()
    {
        return view('admin.categories.create');
    }

    
    public function store(Request $request)
    {
        request()->validate([
            'name'=>'required|max:200',
            'description'=>'required',
        ]);
        $categories=new Category();
        $categories->name=$name=$request->name;
        $categories->description=$request->description;
        $categories->status=$request->status;
        $categories->slug=str_slug($name);
        $categories->save();
        Session::flash('msg',"Category was created successfully");
        return redirect()->route('admin.categories.index');
    }

    public function edit($id)
    {
        $categories=Category::where('id',$id)->first();
        return view('admin.categories.edit',compact('categories'));
    }

    public function update(Request $request, $id)
    {
        
        request()->validate([
            'name'=>'required|max:200',
            'description'=>'required',
        ]);
        $categories=Category::find($id);
        $categories->name=$name=$request->name;
        $categories->description=$request->description;
        $categories->status=$request->status;
        $categories->slug=str_slug($name);
        $categories->save();
        Session::flash('msg',"Category was updated successfully");
        return redirect()->route('admin.categories.index');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $categories=Category::where('id',$id)->first();
        $categories->delete();
        Session::flash('msg',"category deleted successfully");
        return redirect()->route('admin.categories.index');
        
    }
}
