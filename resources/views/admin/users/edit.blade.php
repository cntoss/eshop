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
        <form method="post" action="{{route('admin.users.update',['id'=>auth()->user()->id])}}" enctype="multipart/form-data">
        {{@csrf_field()}}
        <div class="form-group ">
          <label for="inputName">Name</label>
          <input type="text" class="form-control" id="inputEmail4"  name="name" value="{{$user->name}}">
        </div>
        <div class="form-group">
          <label>Email</label>
          <input type="email" class="form-control" name="email" value="{{$user->email}}">
        </div>              
        <div class="form-group">
        <label for="inputFile">Image</label>
        <input type="file" name="image" class="form-control" >
        </div>
        <div class="form-group">
        <label for="inputUrl">facebook_url</label>
        <input type="url" name="facebook_url" class="form-control" value="{{$user->facebook_url}}">
        </div>
        <div class="form-group">
        <label for="inputSelect">twitter_url</label>
        <input type="url" name="twitter_url" class="form-control" value="{{$user->twitter_url}}" >
        </div>
        <div class="form-group">
        <label for="inputSelect">about</label>
        <textarea name="about" class="form-control">{{$user->about}}</textarea>
        </div>
        <div class="form-group">
        <label for="inputSelect">phone</label>
        <input type="number" name="phone" class="form-control" value="{{$user->phone}}">
        </div>
        <div class="form-group">
        <label for="inputPassword">password</label>
        <input type="password" name="password" class="form-control" value="{{$user->password}}">
        </div>
        
        <div class="form-group">
         <button type="submit" class="btn btn-primary">Create</button>
        </div>
        </form>
    </div>
</div>
@endsection