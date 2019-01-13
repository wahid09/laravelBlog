<aside class="main-sidebar">
	<!-- sidebar: style can be found in sidebar.less -->
	<section class="sidebar">
		<!-- Sidebar user panel -->
		<div class="user-panel">
			<div class="pull-left image">
				<img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
			</div>
			<div class="pull-left info">
				<p>{{ Auth::user()->name }}</p>
				<a href="#"><i class="fa fa-circle text-success"></i> Online</a>
			</div>
		</div>
		<!-- search form -->
		<form action="#" method="get" class="sidebar-form">
			<div class="input-group">
				<input type="text" name="q" class="form-control" placeholder="Search...">
				<span class="input-group-btn">
					<button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
					</button>
				</span>
			</div>
		</form>
		<!-- /.search form -->
		<!-- sidebar menu: : style can be found in sidebar.less -->
		<ul class="sidebar-menu" data-widget="tree">
			<li class="header">MAIN NAVIGATION</li>
			<li class="treeview">
				<a href="#">
					<i class="fa fa-dashboard"></i> <span>Post</span>
					<span class="pull-right-container">
						<i class="fa fa-angle-left pull-right"></i>
					</span>
				</a>
				<ul class="treeview-menu">

					@can('posts.create', Auth::user())
					<li class="active"><a href="{{route('post.create')}}"><i class="fa fa-circle-o"></i> Add Post</a></li>
					@endcan

					<li><a href="{{route('post.index')}}"><i class="fa fa-circle-o"></i>Manage Post</a></li>
				</ul>
			</li>
			@can('posts.category', Auth::user())
			<li class="treeview">
				<a href="#">
					<i class="fa fa-dashboard"></i> <span>Categories</span>
					<span class="pull-right-container">
						<i class="fa fa-angle-left pull-right"></i>
					</span>
				</a>
				<ul class="treeview-menu">
					<li class="active"><a href="{{route('category.create')}}"><i class="fa fa-circle-o"></i>Add Category</a></li>
					<li><a href="{{route('category.index')}}"><i class="fa fa-circle-o"></i>Manage Category</a></li>
				</ul>
			</li>
			@endcan
			@can('posts.tag', Auth::user())
			<li class="treeview">
				<a href="#">
					<i class="fa fa-dashboard"></i> <span>Tags</span>
					<span class="pull-right-container">
						<i class="fa fa-angle-left pull-right"></i>
					</span>
				</a>
				<ul class="treeview-menu">
					<li class="active"><a href="{{route('tag.create')}}"><i class="fa fa-circle-o"></i>Add Tag</a></li>
					<li><a href="{{route('tag.index')}}"><i class="fa fa-circle-o"></i>Manage Tag</a></li>
				</ul>
			</li>
			@endcan
			<li class="treeview">
				<a href="#">
					<i class="fa fa-dashboard"></i> <span>User</span>
					<span class="pull-right-container">
						<i class="fa fa-angle-left pull-right"></i>
					</span>
				</a>
				<ul class="treeview-menu">
					<li class="active"><a href="{{route('user.create')}}"><i class="fa fa-circle-o"></i>Add User</a></li>
					<li><a href="{{route('user.index')}}"><i class="fa fa-circle-o"></i>Manage User</a></li>
				</ul>
			</li>
			<li class="treeview">
				<a href="#">
					<i class="fa fa-dashboard"></i> <span>Role</span>
					<span class="pull-right-container">
						<i class="fa fa-angle-left pull-right"></i>
					</span>
				</a>
				<ul class="treeview-menu">
					<li class="active"><a href="{{route('role.create')}}"><i class="fa fa-circle-o"></i>Add Role</a></li>
					<li><a href="{{route('role.index')}}"><i class="fa fa-circle-o"></i>Manage Role</a></li>
				</ul>
			</li>
			<li class="treeview">
				<a href="#">
					<i class="fa fa-dashboard"></i> <span>Permission</span>
					<span class="pull-right-container">
						<i class="fa fa-angle-left pull-right"></i>
					</span>
				</a>
				<ul class="treeview-menu">
					<li class="active"><a href="{{route('permission.create')}}"><i class="fa fa-circle-o"></i>Add Permission</a></li>
					<li><a href="{{route('permission.index')}}"><i class="fa fa-circle-o"></i>Manage Permission</a></li>
				</ul>
			</li>					
		</ul>
	</section>
	<!-- /.sidebar -->
</aside>