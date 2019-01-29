@extends('layouts.admin.index')
@section('content')
@include('layouts.admin.snippets.session_message')
<div class="content">
  <a class="btn btn-success pull-right" href="{{route('admin.posts.create')}}" >Add New Post</a>
  <h2>Posted Data</h2>
  <div class="table-responsive">          
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>S.N</th>
        <th>Title</th>
        <th>Body</th>
        <th>Image</th>
        <th>Status</th>
        <th>Action</th>
        <th>Category</th>
      </tr>
    </thead>
    <tbody>
        @if($posts->count())
          @foreach($posts as $post)
             <tr>
              <td>{{$post->id}}</td>
              <td>{{$post->title}}</td>
              <td>{{$post->description}}</td>
              <td><img src="{{asset("images/$post->image")}}" alt="" height="40px"></td>
              <td>
                @if($post->status==1)
                <span class="level level-success">Active</span>
                @else
                <span class="level level-info">Inactive</span>
                @endif
              </td>
              <td>
                <a class="btn btn-primary" href="{{route('admin.posts.edit',['id'=>$post->id])}}">Edit</a>
                <a class="btn btn-danger" href="{{route('admin.posts.delete',['id'=>$post->id])}}">Delete</a>
              </td>
              <td>{{$post->category->name}}</td>
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