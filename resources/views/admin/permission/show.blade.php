@extends('admin.layouts.app')
@section('main-content')
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
		Tag Table
		<small>Permission manage here</small>
		</h1>
		<a class="col-md-offset-5 btn btn-success" href="{{ route('permission.create') }}">Add New</a>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
			<li><a href="#">Tables</a></li>
			<li class="active">Permission List</li>
		</ol>
	</section>
	<!-- Main content -->
	<section class="content">
		<div class="row">
			<div class="col-xs-12">
				<!-- /.box -->
				<div class="box">
					<div class="box-header">
						@include('includes.mesagess')
					</div>
					<!-- /.box-header -->
					<div class="box-body">
						<table id="example1" class="table table-bordered table-striped">
							<thead>
								<tr>
									<th>Sl</th>
									<th>Permission Name</th>
									<th>Permission For</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								@foreach($permissions as $permission)
								<tr>
									<td>{{ $loop->index + 1 }}</td>
									<td>{{ $permission->name }}</td>
								    <td>{{ $permission->for }}</td>
									<td>
										<a href="{{route('permission.edit',$permission->id)}}" class="btn btn-primary"><i class="fa fa-edit"></i></a>
										<a onclick="if(confirm('Are you sure to delete this!')){
											event.preventDefault();document.getElementById('delete-form-{{$permission->id}}').submit();
										}else{
											event.preventDefault();
										}" href="{{route('permission.destroy',$permission->id)}}" class="btn btn-danger"><i class="fa fa-trash"></i></a>
										<form method="POST" id="delete-form-{{$permission->id}}" action="{{ route('permission.destroy',$permission->id) }}">
     									{{ csrf_field() }}
    									{{ method_field('DELETE') }}
										</form>
										
									</td>
								</tr>
								@endforeach
							</tbody>
							<tfoot>
							<tr>
								<th>SL</th>
								<th>permission Name</th>
								<th>Permission For</th>
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