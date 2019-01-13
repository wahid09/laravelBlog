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
						<h3 class="box-title">Add Category</h3>
					</div>
					<!-- /.box-header -->
					@include('includes.mesagess')
					<!-- form start -->
					<form role="form" action="{{route('category.store')}}" method="post">
						{{ csrf_field() }}
						<div class="box-body">
							<div class="col-md-offset-3 col-md-6">
								<div class="form-group">
									<label for="title">Category Name</label>
									<input type="text" class="form-control" id="title" name="name" placeholder="Enter tag name">
								</div>
								<div class="form-group">
									<label for="title">Category Slug</label>
									<input type="text" class="form-control" id="title" name="slug" placeholder="Enter title">
								</div>
								<div class="box-footer">
									<button type="submit" class="btn btn-primary">Submit</button>
									<a class="btn btn-warning" href="{{route('category.index')}}">Back</a>
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