@extends('admin.layouts.app')
@section('main-content')
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
		Category Table
		<small>Category manage here</small>
		</h1>
		<a class="col-md-offset-5 btn btn-success" href="{{ route('category.create')}}">Add New</a>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
			<li><a href="#">Tables</a></li>
			<li class="active">Post List</li>
		</ol>
	</section>
	<!-- Main content -->
	<section class="content">
		<div class="row">
			<div class="col-xs-12">
				<!-- /.box -->
				<div class="box">
					<div class="box-header">
					</div>
					<!-- /.box-header -->
					<div class="box-body">
						<table id="example1" class="table table-bordered table-striped">
							<thead>
								<tr>
									<th>SL</th>
									<th>Category Name</th>
									<th>Category Slug</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								@foreach($categories as $category)
								<tr>
									<td>{{ $loop->index + 1}}</td>
									<td>{{ $category->name}}</td>
									<td>{{ $category->slug}}</td>
									<td>
										<a class="btn btn-primary" href="{{route('category.edit',$category->id)}}"><i class="fa fa-edit"></i></a>
										<a class="btn btn-danger" onclick="
										if(confirm('Are you sure, To delete this')){
											event.preventDefault();document.getElementById('delete-form-{{$category->id}}').submit();}
											else{event.preventDefault();
											}" href="{{route('category.destroy',$category->id)}}"><i class="fa fa-trash"></i></a>
										<form id="delete-form-{{$category->id}}" action="{{route('category.destroy', $category->id)}}" method="post">
											{{ csrf_field() }}
											{{ method_field('DELETE')}}
										</form>
									</td>
								</tr>
								@endforeach
								
							</tbody>
							<tfoot>
							<tr>
								<th>SL</th>
								<th>Category Name</th>
								<th>Category Slug</th>
								<th>Action</th>
							</tr>
							</tfoot>
						</table>
					</div>
					<!-- /.box-body -->
				</div>
				<!-- /.box -->
			</div>
			<!-- /.col -->
		</div>
		<!-- /.row -->
	</section>
	<!-- /.content -->
</div>
@endsection