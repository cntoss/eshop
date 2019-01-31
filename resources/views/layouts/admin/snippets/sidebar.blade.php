<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
	<div class="profile-sidebar">
		<div class="profile-userpic">
			<img src="http://placehold.it/50/30a5ff/fff" class="img-responsive" alt="">
		</div>
		<div class="profile-usertitle">
			<div class="profile-usertitle-name">Santosh Adhikari</div>
			<div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
		</div>
		<div class="clear"></div>
	</div>
	<div class="divider"></div>
	
	<ul class="nav menu">
		<li class="active"><a href="index.html"><em class="fa fa-dashboard">&nbsp;</em> Dashboard</a></li>
		<li class="nav-item	"><a href="{{route('admin.categories.index')}}">Category</a></li>
		<li class="nav-item"><a href="{{route('admin.posts.index')}}">Posts</a></li>
		<li class="nav-item"><a href="{{route('admin.users.index')}}">Users</a></li>
		<li>
			<a class="dropdown-item" href="{{ route('logout') }}"
			   onclick="event.preventDefault();
			                 document.getElementById('logout-form').submit();">
			    {{ __('Logout') }}
			</a>

			<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
			    @csrf
			</form>
		</li>
	</ul>
</div><!--/.sidebar-->