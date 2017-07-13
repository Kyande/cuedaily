@extends('layouts.master')

@section('content')
	<!-- add tags -->
	<h3>Add a tag</h3>

	<hr class="style2">
	
	<div class="col-md-5">
		
		<form action="/tag/add" method="POST">

			@include('layouts.errors')

			{{ csrf_field() }}

			<div class="form-group">
				<label for="name">Name:</label>
				<input class="form-control" type="text" id="name" name="name" autocomplete="off" placeholder="Tag name.." autofocus required>
			</div>

			<div class="form-group">
				<button type="Submit" class="btn btn-primary">Save</button> 
			</div>

		</form>

	</div>
@endsection