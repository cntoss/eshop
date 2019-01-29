<div class="container">
  <h2>Horizontal form</h2>
  <form class="form-horizontal" action="{{route('admin.posts.store')}}" enctype="multipart/form-data">
    <div class="form-group">
      <label class="control-label col-sm-2" for="title">Title:</label>
      <div class="col-sm-10">
        <input type="title" class="form-control" id="title" placeholder="Enter title" name="title">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="body">Body:</label>
      <div class="col-sm-10">          
        <textarea type="text" class="form-control" id="body" placeholder="Enter password" name="body"></textarea>
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
          <option value="1" name="ststus">Active</option>
           <option value="0" name="ststus">Inactive</option>

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