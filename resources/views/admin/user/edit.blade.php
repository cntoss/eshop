@extends('layouts.admin.index')
@section('content')
  @include('layouts.admin.snippets.error_message')
  <div class="container">
    <h2>edit the form form</h2>
    <form method="post" action="{{route('admin.posts.update',['id'=>$posts->id])}}" enctype="multipart/form-data">
      @csrf
      <div class="form-group">
        <label class="control-label col-sm-2" for="title">Title:</label>
        <div class="col-sm-10">
          <input type="title" class="form-control" id="title" value="{{$posts->title}}" name="title">
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="description">Description:</label>
        <div class="col-sm-10">          
          <textarea type="text" class="form-control" id="description"  name="description">{{$posts->description}}</textarea>
        </div>
      </div>
          <div class="form-group">        
        <div class="col-sm-offset-2 col-sm-10">
          <div class="file">
            <label><input type="file" name="image"> Image</label>
          </div>
        </div>
      </div>
      <div class="form-group">        
        <div class="col-sm-offset-2 col-sm-10">
          <div class="option">
            <label> Status</label>
            <select class="form-control" name="status">
             <option value="1">Active</option>
             <option value="0">Inactive</option>
            </select>
          </div>
        </div>
      </div>

      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <div class="option">
             <label>Category</label>            
             <select class="form-control" name="category_id">
                @foreach($categories as $category)
                 <option value="{{$category->id}}" >{{$category->name}}</option>
                @endforeach
             </select>
          </div> 
        </div>
       </div>

      <div class="form-group">        
        <div class="col-sm-offset-2 col-sm-10">
          <button type="submit" class="btn btn-default">Submit</button>
        </div>
      </div>
    </form>
  </div>
@endsection