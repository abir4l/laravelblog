@extends('layouts.main')

@section('content')


<div class="row">
	<div class="col-md-4">
		<h3>Add a post</h3>
		<form action="@if($id==0){{'/blogs'}}@else{{'/blogs/'}}{{$id}}{{'/edit'}}@endif" method="POST" class="form-horizontal">
			  @csrf
		<div class="form-group">
			<label class="control-label">Title</label>
			<input class="form-control" name="title" value="{{$title}}">
				
			
			
		</div>
		<div class="form-group">
			<label class="control-label">Description</label>
			<textarea name="description" class="form-control">{{$description}}</textarea> 
		</div>
		<div class="form-group">
			<button class="btn" type="submit">
				Submit
			</button>
			<a href="/blogs" class="btn btn-danger">Cancel</a>
		</div>
	</form>
	</div>
</div>
	
@endsection