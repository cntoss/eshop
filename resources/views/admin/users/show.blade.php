@extends('layouts.admin.index')
@section('content')
@extends('layouts.admin.index')
@section('content')
 @include('layouts.admin.snippets.error_message')
  <div class="row">
    <div class="panel panel-default">
      <a class="btn btn-success pull-right" href="{{route('admin.users.edit',['id'=>$user->id])}}" >Edit User</a><br>
         <br>
	  <div class="content">
	      <img src="{{asset("images/$user->image")}}" alt="" height="40px">@section('content')
	      <div class="table-responsive">          
		    <table class="table table-bordered">
		      <thead>
		        <tr>
		          <th>S.N</th>
		          <th>name</th>
		          <th>email</th>
		          <th>about</th>
		          <th>phone</th>
		        </tr>
		      </thead>
		      <tbody>
		               <tr>
		                <td>{{$user->id}}</td>
		                <td>{{$user->name}}</td>
		                <td>{{$user->email}}</td>
		                <td>{{$user->about}}</td>
		                <td>{{$user->phone}}</td>
		               </tr>
		      </tbody>
		    </table>
	      </div>
      </div>
    </div>
  </div>
 @endsection