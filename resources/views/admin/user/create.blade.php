@extends('admin.layouts.app')
@section('main-content')
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
			<li><a href="#">Forms</a></li>
			<li class="active">Editors</li>
		</ol>
	</section>
	<!-- Main content -->
	<section class="content">
		<div class="row">
			<div class="col-md-12">
				<!-- general form elements -->
				<div class="box box-primary">
					<div class="box-header with-border">
						<h3 class="box-title">Add Admin</h3>
					</div>
					<!-- /.box-header -->
					@include('includes.mesagess')
					<!-- form start -->
					<form role="form" action="{{route('user.store')}}" method="POST">
						{{ csrf_field() }}
						<div class="box-body">
							<div class="col-md-offset-3 col-md-6">
								<div class="form-group">
									<label for="title">Admin Name</label>
									<input type="text" class="form-control" id="title" name="name" placeholder="Enter user name" value="{{old('name')}}">
								</div>
								<div class="form-group">
									<label for="email">Admin Email</label>
									<input type="email" class="form-control" id="email" name="email" placeholder="Enter user email" value="{{old('email')}}">
								</div>
								<div class="form-group">
									<label for="email">Phone Number</label>
									<input type="tel" name="phone" placeholder="0176 5153 253 " maxlength="12"  title="elaven digits code" required class="form-control"/ value="{{old('phone')}}">
								</div>
								<div class="form-group">
									<label for="password">Admin Password</label>
									<input type="password" class="form-control" id="password" name="password" placeholder="Enter user password" value="{{old('password')}}">
								</div>
								<div class="form-group">
									<label for="password">Confirm Password</label>
									<input type="password" class="form-control" id="password" name="password_confirmation" placeholder="type and confirm password">
								</div>
								<div class="form-group">
									<label for="password">Status</label>
									<div class="checkbox">
										<label>
											<input type="checkbox" name="status" @if(old('status')==1) checked @endif value="1">Active
										</label>
									</div>
									
								</div>
								<div class="form-group">
									<label>Assign Role</label>
									<div class="row">
										@foreach($roles as $role)
									<div class="col-lg-3">
										<div class="checkbox">
											<label><input type="checkbox" name="role[]" value="{{$role->id}}">{{$role->name}}</label>
										</div>
									</div>
									@endforeach
									</div>
									
								</div>
							</div>
						</div>
						<div class="box-footer text-center">
							<button type="submit" class="btn btn-primary">Submit</button>
							<a type="button" class="btn btn-warning" href="{{route('user.index')}}">Back</a>
						</div>
				<!-- /.box-body -->
			</form>
		</div>
		<!-- /.box -->
	</div>
	<!-- /.col-->
</div>
<!-- ./row -->
</section>
<!-- /.content -->
</div>
@endsection