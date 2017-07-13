@extends('layouts.master')

@section('content')

	<form method="POST" action="/registration">
		{{ csrf_field() }}
		
		<div class="col-sm-8">

			<h1>Fill in this Form to register</h1>

			<hr>

			@include('layouts.errors')

			<div class="form-group">
				<label for="username">Username:</label>
				<input class="form-control" type="text" id="username" name="username" placeholder="Enter your username" autofocus required>
			</div>

			<div class="form-group">
				<label for="email">E-mail:</label>
				<input class="form-control" type="email" id="email" name="email" autocomplete="off" placeholder="Enter your e-mail" required>
			</div>

			<div class="form-group">
				<label for="password">Password:</label>
				<input class="form-control" type="password" id="password" name="password" placeholder="Enter your password" required>
			</div>

			<div class="form-group">
				<label for="password_confirmation">Repeat password:</label>
				<input class="form-control" type="password" id="password_confirmation" name="password_confirmation" placeholder="Re-enter your password" required>
			</div>
			<hr>
			
			<div class="form-group">
				<button type="Submit" class="btn btn-primary">Register</button> &nbsp
				<span>Already a member? Sign in <a href="/login"><u>here</u></a></span>
			</div>

		</div>
		
	</form>

@endsection