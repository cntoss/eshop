@extends('layouts.admin.index')
@section('content')
  @include('layouts.admin.snippets.error_message')
  <div class="panel panel-default">
      <div class="panel-heading">
         <h3>Edit Category</h3>
      </div>
      <div class="panel-body">
        <form method="post" action="{{route('admin.categories.update',['id'=>$categories->id])}}">
            {{@csrf_field()}}
            <div class="form-group ">
              <label for="inputName">Name</label>
              <input type="text" class="form-control" id="inputEmail4" value="{{$categories->name}}" name="name">
            </div>
            <div class="form-group">
              <label>Description</label>
              <textarea class="form-control" name="description">{{$categories->description}}</textarea>
            </div>             
            <div class="form-group">
            <label for="inputSelect">Status</label>
             <select class="form-control" name="status">
                 <option value="1">Active</option>
                 <option value="0">Inactive</option>
             </select>
            </div>
            <div class="form-group">
               <button type="submit" class="btn btn-primary">update</button>
            </div>
        </form>
      </div>
  </div>
@endsection 
