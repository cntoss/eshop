@extends('layouts.admin.index')
@section('content')
@include('layouts.admin.snippets.session_message')
<div class="content">
  <a class="btn btn-success pull-right" href="{{route('admin.users.create')}}" >Add New User</a><br>
  <h2>User Data</h2>
  <div class="table-responsive">          
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>S.N</th>
          <th>name</th>
          <th>email</th>
          <th>Image</th>
          <th>about</th>
          <th>phone</th>
          <th>action</th>
        </tr>
      </thead>
      <tbody>
          @if($users->count())
            @foreach($users as $user)
               <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td><img src="{{asset("images/$user->image")}}" alt="" height="40px"></td>
                <td>{{$user->about}}</td>
                <td>{{$user->phone}}</td>
                <td>
                  <a class="btn btn-primary" href="{{route('admin.users.edit',['id'=>$user->id])}}">Edit</a>
                  <a class="btn btn-danger" href="{{route('admin.users.delete',['id'=>$user->id])}}">Delete</a>
                  <a class="btn btn-success" href="{{route('admin.users.show')}}">Show</a>
            @endforeach
           @else
             <tr>
             <td colspan="7">NO post available</span></td>
             </tr>
           @endif
      </tbody>
    </table>
  </div>
</div>
@endsection