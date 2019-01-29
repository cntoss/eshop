@extends('layouts.admin.index')
@section('content')
<div class="row">
        <div class="panel panel-default">
          <div class="panel-heading">
               <h3 class="card-title">Add Category</h3>
          </div>
          <div class="panel-body">
                  <form method="post" action="{{route('admin.categories.store')}}">
                  {{@csrf_field()}}
                  <div class="form-group ">
                    <label for="inputName">Name</label>
                    <input type="text" class="form-control" id="inputEmail4" placeholder="Enter name of categories" name="name">
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
                  </div>
              
                  <div class="form-group">
                <button type="submit" class="btn btn-primary">Create</button>
                </div>
              </form>
       </div>
  </div>
</div>

@endsection