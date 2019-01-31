@extends('layouts.admin.index')
@section('content')
	  <div class="content">
	  	      <a class="btn btn-success pull-right" href="{{route('admin.users.edit',['id'=>$user->id])}}" >Edit User</a><br>
         <br>
         <table style="width: 75%">
         <tr>
	     <td> <img class="img-circle" src="{{asset("images/$user->image")}}" alt="" height="200px" ></td>
		  <td style="padding: 50px;">{{$user->about}}</td>		    
	     </tr>
	      </table>
	      <div class="table-responsive">          
		    <table class="table table-bordered">
		      <tbody>
		               <tr>
		               	<td>Id</td>
		                <td>{{$user->id}}</td>
		               </tr>
		               <tr>
		               	<td>Name</td>
		                <td>{{$user->name}}</td>
		               	</tr>
		               	<tr>
		               	<td>Email</td>
		                <td>{{$user->email}}</td>
		               	</tr>
		               	<tr>
		               	<td>Phone</td>
		                <td>{{$user->phone}}</td>
		               	</tr>
		               	<tr>
		               		<td>Facebook_url</td>
			                <td>{{$user->facebook_url}}</td>
		               	</tr>
		               	<tr>
		               		<td>Twitter_url</td>
		               		<td>{{$user->twitter_url}}</td>
		               	</tr>
		      </tbody>
		    </table>
	      </div>
      </div>
    </div>
  </div>
 @endsection