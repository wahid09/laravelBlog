@extends('admin.layouts.app')
@section('headSection')
<!-- Select2 -->
 <link rel="stylesheet" href="{{asset('admin/bower_components/select2/dist/css/select2.min.css')}}">
@endsection
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
						<h3 class="box-title">Add Post</h3>
					</div>
					<!-- /.box-header -->
					@include('includes.mesagess')
					<!-- form start -->
					<form role="form" action="{{route('post.update',$post->id)}}" method="POST" enctype="multipart/form-data">
						{{ csrf_field() }}
						{{ method_field('PATCH') }}
						<div class="box-body">
							<div class="col-md-6">
								<div class="form-group">
									<label for="title">Post Title</label>
									<input type="text" class="form-control" id="title" name="title" value="{{$post->title}}">
								</div>
								<div class="form-group">
									<label for="subtitle">Post Sub Title</label>
									<input type="text" class="form-control" id="subtitle" name="subtitle" value="{{$post->subtitle}}">
								</div>
								<div class="form-group">
									<label for="subtitle">Author</label>
									<input type="text" class="form-control" id="subtitle" name="author" value="{{$post->author}}">
								</div>
								<div class="form-group">
									<label for="slug">Post Slug</label>
									<input type="text" class="form-control" id="slug" name="slug" value="{{$post->slug}}">
								</div>
								<!-- EDITOR -->
								<!--
								<div class="form-group">
									<label for="body">Post Description</label>
									<textarea class="textarea" id="body" name="body"
									style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{$post->body}}</textarea>
								</div>
							-->
								<div class="form-group">
									<label for="body">Post Description</label>
									<textarea id="editor1" rows="10" cols="80" name="body">{{$post->body}}
                             		</textarea>
								</div>
								<!-- EDIOR -->
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="exampleInputFile">Post image</label>
									<input type="file" id="exampleInputFile" name="image">
									<img src="Storage::disk('local')->url($post->image)" alt="">
								</div>
								<div class="checkbox">
									<label><strong>Publication status</strong><br/>
										<input type="checkbox" name="status" @if($post->status == 1) checked @endif value="1">Publish
									</label>
								</div>
								
								<!--- New ----->
							
						              <div class="form-group">
						                <label>Select Tag</label>
						                <select class="form-control select2" multiple="multiple" data-placeholder="Select a State"
						                        style="width: 100%;" name="tags[]">
						                        @foreach($tags as $tag)
						                  <option value="{{ $tag->id }}"
						                  	@foreach($post->tags as $postTag)
						                  	@if($postTag->id == $tag->id)
						                  	selected
						                  	@endif
						                  	@endforeach
						                  	>{{ $tag->name }}</option>
						                  @endforeach
						                  
						                </select>
						              </div>
						              <div class="form-group">
						                <label>Select Category</label>
						                <select class="form-control select2" multiple="multiple" data-placeholder="Select a State"
						                        style="width: 100%;" name="categories[]">
						                        @foreach($categories as $category)
						                  <option value="{{ $category->id }}"
											@foreach($post->categories as $postCat)
						                  	@if($postCat->id == $category->id)
						                  	selected
						                  	@endif
						                  	@endforeach
						                  	>{{ $category->name }}</option>
						                  @endforeach
						                </select>
						              </div>
            
								<!-- New -->
							</div>
							
						</div>
						<!-- /.box-body -->
						<div class="box-footer">
							<button type="submit" class="btn btn-primary">Submit</button>
							<a class="btn btn-warning" href="{{route('post.index')}}">Back</a>
						</div>
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
@section('footerSection')
<!-- Select2 -->
<script src="{{asset('admin/bower_components/select2/dist/js/select2.full.min.js')}}"></script>
<script src="{{asset('admin/ckeditor/ckeditor.js')}}"></script>
<script>
  $(document).ready(function () {
    //Initialize Select2 Elements
    $('.select2').select2()
    //Ck editor
    CKEDITOR.replace('editor1')
    //bootstrap WYSIHTML5 - text editor
    $('.textarea').wysihtml5()
});
</script>
@endsection