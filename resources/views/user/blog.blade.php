@extends('user/app')
@section('head')
@endsection
@section('bg-img', asset('user/img/home-bg.jpg'))
@section('title', 'LightBulb')
@section('sub-heading', 'Learn Together and Grow Together')
@section('main-content')
<!-- Main Content -->
<div class="container">
	<div class="row">
		<div class="col-lg-12 adtop text-center">
			<img src="user/img/728x90.jpg" alt="">
		</div>
	</div>
</div>
<div class="container">
	<div class="row">
		<div class="col-lg-8 col-md-10">
			@foreach($posts as $post)
			<div class="post-preview">
				<a href="{{route('post',$post->slug)}}">
					<h3 class="post-title">
					{{$post->title}}
					</h3>
					<h3 class="post-subtitle">
					{{$post->subtitle}}
					</h3>
				</a>
				<p class="post-meta"><i class="fa fa-pen-nib">Posted by:
					<a href="https://www.facebook.com/wahidullah09" target="__blank">{{$post->author}}</a></i>&nbsp<i class="fa fa-clock">{{$post->created_at->diffForHumans()}}</i></p>
				</div>
				@endforeach
				<hr>
				{{$posts->links("pagination::bootstrap-4")}}
			</div>
			<div class="col-md-4">
				  <div class="list-group pt-2">
				    <a class="list-group-item active text-center">Category</a>
				    @if(count($categories)>0)
				    @foreach($categories as $category)
				    <a href="{{ route('category',$category->slug) }}" class="list-group-item">{{$category->name}}</a>
				    @endforeach
				    @else
				 @endif
				  </div>
				  <div class="ad pt-3 text-center">
				  	<img src="user/img/300x250.jpg" alt="">
				  </div>
				  <!-- Recent Post -->
				  <div class="list-group pt-3">
				    <a class="list-group-item active text-center">Recent post</a>
				    <a href="#" class="list-group-item">Second item</a>
				    <a href="#" class="list-group-item">Third item</a>
				  </div>
			</div>
		</div>
	</div>
	@endsection
	@section('footer')
	@endsection