@extends('layouts.admin.index')
@section('content')
<div class="content">
  <a class="btn btn-success pull-right" href="{{route('admin.user.create')}}" >Add New Post</a>
  <h2>Posted Data</h2>
  <div class="table-responsive">          
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>Title</th>
          <th>Body</th>
          <th>Image</th>
          <th>Status</th>
          <th>Action</th>
          <th>Category</th>
        </tr>
      </thead>
      <tbody>
          @if($users->count())
          @foreach($users as $user)
               <tr>
                <td>{{$user->title}}</td>
                <td>{{$user->description}}</td>
                <td><img src="{{asset("images/$user->image")}}" alt="" height="40px"></td>
                <td>
                  @if($user->status==1)
                  <span class="level level-success">Active</span>
                  @else
                  <span class="level level-info">Inactive</span>
                  @endif
                </td>
                <td>
                  <a class="btn btn-primary" href="{{route('admin.user.edit',['id'=>$user->id])}}">Edit</a>
                  <a class="btn btn-danger" href="{{route('admin.user.delete',['id'=>$user->id])}}">Delete</a>
                </td>
                <td>{{$user->category->name}}</td>
              </tr>
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
