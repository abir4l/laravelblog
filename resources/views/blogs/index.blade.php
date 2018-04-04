@extends('layouts.main')
@section('title', 'Index Page')

@section('content')

<div class="row">
	<div class="col-md-6">
		<h1>Blog listing</h1>
	<a href="/blogs/create">Add a Post</a>


<div class="blogs">
	@foreach($blogs as $blog)
			
		<div class="blog">
			<h3>{{$blog->title}}</h3>
			<p>
				{{$blog->description}}
			</p>
			<a href="/blogs/{{$blog->id}}">Edit Blog</a>	<a class="text-danger" href="/blogs/{{$blog->id}}/delete">Delete Blog</a>	
		</div>

	@endforeach
</div>
	</div>
</div>
	
		
@endsection