@extends('layouts.admin.index')
@section('content')

@include('layouts.admin.snippets.session_message')

<div class="content">
<span class="pull-left clickable panel-toggle"><a class="btn btn-success" href="{{route('admin.categories.create')}}">create new</a></span>
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">S.N</th>
      <th scope="col">Name</th>
      <th scope="col">description</th>
      <th scope="col">Status</th>
      <th scope="col">ACTION</th>
    </tr>
  </thead>
  <tbody>
       @foreach($categories as $category)
    <tr>
      <th scope="row">{{$category->id}}</th>
      <td>{{$category->name}} <span class="badge badge-info">{{$category->posts->count()}}</span></td>
      <td>{{$category->description}}</td>
      <td>{{$category->status}}</td>
      <td>
    <a class="btn btn-success" href="{{route('admin.categories.edit',['id'=>$category->id])}}">edit</a>
    <a class="btn btn-danger" href="{{route('admin.categories.delete',['id'=>$category->id])}}">delete</a>
   </td>
 </tr>

    @endforeach
  </tbody>
</table>
</div>
  @endsection
