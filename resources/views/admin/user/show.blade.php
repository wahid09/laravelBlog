@extends('admin.layouts.app')
@section('main-content')
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
		User Table
		<small>User manage here</small>
		</h1>
		<a class="col-md-offset-5 btn btn-success" href="{{route('user.create')}}">Add New</a>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
			<li><a href="#">Tables</a></li>
			<li class="active">User List</li>
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
									<th>User Name</th>
									<th>Assigned Role</th>
									<th>Status</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								@foreach($users as $user)
								<tr>
									<td>{{ $loop->index + 1 }}</td>
									<td>{{ $user->name }}</td>
									<td>
										@foreach($user->roles as $role)
										{{$role->name}},
										@endforeach
									</td>
									<td>{{$user->status? 'Active' : 'Inactive'}}</td>
									<td>
										<a href="{{route('user.edit',$user->id)}}" class="btn btn-primary"><i class="fa fa-edit"></i></a>
										<a onclick="if(confirm('Are you sure to delete this!')){
											event.preventDefault();document.getElementById('delete-form-{{$user->id}}').submit();
										}else{
											event.preventDefault();
										}" href="{{route('user.destroy',$user->id)}}" class="btn btn-danger"><i class="fa fa-trash"></i></a>
										<form method="POST" id="delete-form-{{$user->id}}" action="{{ route('user.destroy',$user->id) }}">
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
								<th>User Name</th>
								<th>Assigned Role</th>
								<th>Status</th>
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