@extends('layouts.admin.index')
@section('content')

@include('layouts.admin.snippets.session_message')

<div class="content">
<span class="pull-right clickable panel-toggle"><button type="button" class="btn btn-success"><a href="{{route('admin.categories.create')}}">create new</a></button></span>
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
       @foreach($category as $record)
    <tr>
      <th scope="row">{{$record->id}}</th>
      <td>{{$record->name}}</td>
      <td>{{$record->description}}</td>
      <td>{{$record->status}}</td>
      <td>
    <button type="button" class="btn btn-warning"><a href="{{route('admin.categories.edit',['id'=>$record->id])}}">edit</a></button>
     <button type="button" class="btn btn-danger"><a href="{{route('admin.categories.delete',['id'=>$record->id])}}">delete</a></button>
   </td>
 </tr>

    @endforeach
  </tbody>
</table>
</div>
  @endsection
