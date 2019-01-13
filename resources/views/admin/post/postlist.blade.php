@extends('admin.layouts.app')
@section('main-content')
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
		Post Table
		<small>Post manage here</small>
		</h1>
		@can('posts.create', Auth::user())
		<a class="col-md-offset-5 btn btn-success" href="{{route('post.create')}}">Add new</a>
		@endcan
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
									<th>Post Title</th>
									<th>Post Subtitle</th>
									<th>Post Slug</th>
									<th>Created At</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								@foreach($posts as $post)
								<tr>
									<td>{{ $loop->index +1}}</td>
									<td>{{$post->title}}</td>
									<td>{{$post->subtitle}}</td>
									<td>{{$post->slug}}</td>
									<td>{{$post->created_at}}</td>
									<td>
										@can('posts.update', Auth::user())
										<a class="btn btn-primary" href="{{route('post.edit', $post->id)}}"><i class="fa fa-edit"></i></a>
										@endcan

										@can('posts.delete', Auth::user())
										<a class="btn btn-danger" href="" onclick="
										if(confirm('Are you sure to delete this')){
											event.preventDefault();document.getElementById('delete-form-{{$post->id}}').submit();
										}else{
											event.preventDefault();
										}"><i class="fa fa-trash"></i></a>
										<form id="delete-form-{{$post->id}}" action="{{route('post.destroy', $post->id)}}" method="post">
											{{ csrf_field() }}
											{{ method_field('DELETE')}}
										</form>
										@endcan
									</td>
								</tr>
								@endforeach
							</tbody>
							<tfoot>
							<tr>
								<th>SL</th>
								<th>Post Title</th>
								<th>Post Subtitle</th>
								<th>Post Slug</th>
								<th>Post Description</th>
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