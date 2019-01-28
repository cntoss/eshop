@extends('layouts.admin.index')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="content">
                 <h3 class="card-title">Edit Category</h3>
                <form method="post" action="{{route('admin.categories.update',['id'=>$categories->id])}}">
                    {{@csrf_field()}}
                    <div class="form-group ">
                      <label for="inputName">Name</label>
                      <input type="text" class="form-control" id="inputEmail4" value="{{$categories->name}}" name="name">
                    </div>
                    <div class="form-group">
                      <label>Description</label>
                      <textarea class="form-control" name="description" value="{{$categories->description}}"></textarea>
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
</div>
</div>

@endsection