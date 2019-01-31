<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
	<div class="profile-sidebar">
		<div class="profile-userpic">
			@if(Auth::check())
			<img src="{{asset('images/'.auth()->user()->image)}}" class="img-responsive" alt="">
			@endif

		</div>
		<div class="profile-usertitle">
			@if(Auth::check())
			<div class="profile-usertitle-name">{{auth()->user()->name}}</div>
			@else
			<div class="profile-usertitle-name">Santosh Adhikari</div>
			@endif
			<div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
		</div>
		<div class="clear"></div>
	</div>
	<div class="divider"></div>
	
	<ul class="nav menu">
		<li class="active"><a href="index.html"><em class="fa fa-dashboard">&nbsp;</em> Dashboard</a></li>
		<li class="nav-item	"><a href="{{route('admin.categories.index')}}"><span class="fa fa-archive	
			"></span> Category</a></li>
           @if(Auth::user()->isadmin==1) 
			<li class="nav-item"><a href="{{route('admin.posts.show',['id'=>auth()->user()->id])}}"><span class="fa fa-address-book"></span> Posts</a></li>

			@else
			<li class="nav-item"><a href="{{route('admin.posts.index')}}"><span class="fa fa-address-book"></span> Posts</a></li>
			<li class="nav-item"><a href="{{route('admin.users.index')}}"><span class="fa fa-user"> </span> User</a></li>
			@endif
         @if(Auth::user()->isadmin==1) 
		<li class="nav-item"><a href="{{route('admin.users.show')}}"><span class="glyphicon glyphicon-cog"> </span> Profile</a></li>
		@endif
		<li>
			<a class="dropdown-item" href="{{ route('logout') }}"
			   onclick="event.preventDefault();
			                 document.getElementById('logout-form').submit();">
			   <span class="fa fa-power-off"></span> {{ __('Logout') }}
			</a>

			<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
			    @csrf
			</form>
		</li>
	</ul>
</div><!--/.sidebar-->