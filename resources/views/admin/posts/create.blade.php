@extends('layouts.admin.index')
@section('content')
@include('layouts.admin.snippets.error_message')
<div class="row">
      <div class="panel panel-default">
            <div class="panel-heading">
               <h3 class="card-title">Add Post</h3>
               <br>
            </div>
            <div class="panel-body">
              <form method="post" action="{{route('admin.posts.store')}}" enctype="multipart/form-data">
              {{@csrf_field()}}
              <div class="form-group ">
                <label for="inputName">Title</label>
                <input type="text" class="form-control" id="inputEmail4" placeholder="Enter title of categories" name="title">
              </div>
              <div class="form-group">
                <label>Description</label>
                <textarea class="form-control" name="description" placeholder="Enter description here..."></textarea>
              </div>              
            
             <div class="form-group">
              <label for="inputSelect">Status</label>
               <select class="form-control" name="status">
                   <option value="1">Active</option>
                   <option value="0">Inactive</option>
               </select>
               <div class="form-group">
              <label for="inputSelect">Image</label>
              <input type="file" name="image" class="form-control" placeholder="upload image file">
              </div>
               <div class="form-group">
              <label for="inputSelect">Category</label>            
               <select class="form-control" name="category_id">
                  @foreach($categories as $category)
                   <option value="{{$category->id}}" >{{$category->name}}</option>
                  @endforeach
               </select>
              </div>                 
              <div class="form-group">
            <button type="submit" class="btn btn-primary">Create</button>
        
          </form>
       </div>
    </div>
</div>