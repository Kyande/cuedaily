@extends('layouts.master')

@section('content')
	<div id="postForm">
		
		<form action="/post/create" method="POST">
			{{ csrf_field() }}

			<div class="col-sm-8">

				<h1>Create a new post</h1>

				<hr>

				@include('layouts.errors')

				<div class="form-group">
					<label for="title">Title:</label>
					<input class="form-control" type="text" id="title" name="title" autocomplete="off" placeholder="Post title.." autofocus required>
				</div>

				<div class="form-group">
					<label for="body">Body:</label>
					<textarea class="form-control" name="body" id="body" placeholder="Post body" cols="30" rows="15" required></textarea>
				</div>

				<div class="form-group">
					<label for="tags">Tags:</label>
					<input class="form-control" type="text" id="tags" name="tags" placeholder="Post tags.." required>
				</div>

				<div class="form-group">
					<label for="videoLink">Youtube video link:</label>
					<input class="form-control" type="url" id="videoLink" name="videoLink" placeholder="Youtube video if available.." >
				</div>

				<hr>
			
				<div class="form-group">
					<button type="Submit" class="btn btn-primary">Post</button> 
				</div>
				
			</div>
			
		</form>

	</div>
@endsection