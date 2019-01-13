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
						<h3 class="box-title">Add Permission</h3>
					</div>
					<!-- /.box-header -->
					@include('includes.mesagess')
					<!-- form start -->
					<form role="form" action="{{route('permission.store')}}" method="POST">
						{{ csrf_field() }}
						<div class="box-body">
							<div class="col-md-offset-3 col-md-6">
								<div class="form-group">
									<label for="title">Permission</label>
									<input type="text" class="form-control" id="title" name="name" placeholder="Enter Admin Permission">
								</div>
								<div class="form-group">
									<label for="title">Permission For</label>
									<select name="for" id="for" class="form-control">
										<option selected disabled="">--Select Permission For--</option>
										<option value="post">post</option>
										<option value="user">user</option>
										<option value="other">other</option>
									</select>
								</div>
								<div class="box-footer">
									<button type="submit" class="btn btn-primary">Submit</button>
									<a type="button" class="btn btn-warning" href="{{route('permission.index')}}">Back</a>
								</div>
							</div>
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