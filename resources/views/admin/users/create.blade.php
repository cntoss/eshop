@extends('layouts.admin.index')
@section('content')
 @include('layouts.admin.snippets.error_message')
  <div class="row">
    <div class="panel panel-default">
      <div class="panel-heading">
         <h3 class="card-title">Add User</h3>
         <br>
      </div>
      <div class="panel-body">
        <form method="post" action="{{route('admin.users.store')}}" enctype="multipart/form-data">
        {{@csrf_field()}}
        <div class="form-group ">
          <label for="inputName">Name</label>
          <input type="text" class="form-control" id="inputEmail4" placeholder="Enter name of categories" name="name">
        </div>
        <div class="form-group">
          <label for="inputEmail">Email</label>
          <input type="text" name="email" placeholder="Enter email here...">
        </div>              
        <div class="form-group">
        <label for="inputFile">Image</label>
        <input type="file" name="image" class="form-control" placeholder="upload image file">
        </div>
        <div class="form-group">
        <label for="inputUrl">facebook_url</label>
        <input type="url" name="facebook_url" class="form-control" placeholder="past facebook_url ">
        </div>
        <div class="form-group">
        <label for="inputSelect">twitter_url</label>
        <input type="url" name="twitter_url" class="form-control" placeholder="past twitter_url file">
        </div>
        <div class="form-group">
        <label for="inputSelect">about</label>
        <textarea name="about" class="form-control">Describe yourself</textarea>
        </div>
        <div class="form-group">
        <label for="inputSelect">phone</label>
        <input type="number" name="phone" class="form-control" placeholder="insert phone number">
        </div>
        <div class="form-group">
        <label for="inputPassword">password</label>
        <input type="password" name="password" class="form-control" >
        </div>
        <div class="form-group">
         <button type="submit" class="btn btn-primary">Create</button>
        </div>
        </form>
    </div>
</div>
@endsection