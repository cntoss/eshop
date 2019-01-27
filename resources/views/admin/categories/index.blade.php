@extends('layouts.admin.index')
@section('content')
<table class="table">
  <thead>
    <tr>
      <th scope="col">S.N</th>
      <th scope="col">Name</th>
      <th scope="col">Slug</th>
      <th scope="col">Status</th>
    </tr>
  </thead>
  <tbody>
       @foreach($category as $record)
    <tr>
      <th scope="row">1</th>
      <td>{{$record->name}}</td>
      <td>{{$record->slug}}</td>
      <td>{{$record->status}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
  @endsection
