<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Session;
use File;
use App\Model\Post;
use Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $users=User::all();
        return view('admin.users.index' ,compact('users'));
    }

    public function create()
    {
        return view('admin.users.create');
    }

    public function store(Request $request)
    {
         request()->validate([
            'name'=>'required|max:60',
            'email'=>'required',
            'password'=>'required',
            'about'=>'required',
            'image'=>'image|mimes:jpg,png,jpeg,gif|max:2048',
            'phone'=>'required|max:10'
        ]);

        $user=new User();
        $user->name=$request->name;
        $user->about=$request->about;
        $user->email=$request->email;
        $user->facebook_url=$request->facebook_url;
        $user->twitter_url=$request->twitter_url;
        $user->password=Hash::make($request->password);
        $user->phone=$request->phone;
        if($request->hasFile('image')){
            $image=$request->file('image');
            $new_name=rand().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('/images'),$new_name);
            $user->image=$new_name;
        }
        $user->save();
        Session::flash('msg',"User was created successfully");
        return redirect()->route('admin.users.index');
   
    }

    public function show()
    {   $id=Auth::id();
        $user=User::where('id',$id)->first();
        return view('admin.users.show',compact('user'));
    }

    public function edit($id)
    {
        $user=User::where('id',$id)->first();
        return view('admin.users.edit',compact('user'));
    
    }

    public function update(Request $request, $id)
    {
       request()->validate([
            'name'=>'required|max:60',
            'email'=>'required',
            'password'=>'required',
            'facebook_url'=>'nullable|url',
            'twitter_url'=>'nullable|url',
            'about'=>'required',
            'image'=>'image|mimes:jpg,png,jpeg,gif|max:2048',
            'phone'=>'nullable|numeric'
        ]);
        $user=User::findOrFail($id);
        $user->name=$request->name;
        $user->about=$request->about;
        $user->email=$request->email;
        $user->facebook_url=$request->facebook_url;
        $user->twitter_url=$request->twitter_url;
        $user->password=$request->password;
        $user->phone=$request->phone;
            $image=$request->file('image');
            $new_name=rand().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('/images'),$new_name);
            $user->image=$new_name;
                   
        $user->save();
        Session::flash('msg',"User's data was created successfully");
        return redirect()->route('admin.users.index');

    }

    public function destroy($id)
    {
    $user=User::where('id',$id)->first();
    if(File::exists('image/'.$user->image)){
        unlink('images/'.$user->image);
          }
    $user->delete();    
    Session::flash('msg',"User's data was Deleted successfully");
    return redirect()->route('admin.users.index');
    }
}