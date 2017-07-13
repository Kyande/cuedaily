@extends('layouts.master')

@section('content')

	<form method="POST" action="/login">

		{{ csrf_field() }}

		<div class="col-sm-8">

			<h1>Log in</h1>

			<hr>
			
			@include('layouts.errors')

			<div class="form-group">
				<label for="email">E-mail:</label>
				<input class="form-control" type="email" id="email" name="email" autocomplete="off" placeholder="Enter your e-mail" required autofocus>
			</div>

			<div class="form-group">
				<label for="password">Password:</label>
				<input class="form-control" type="password" id="password" name="password" placeholder="Enter your password" required>
			</div>

			<hr>

			<div class="form-group">
				<button type="Submit" class="btn btn-primary">Log in</button> &nbsp
				<span>New here? Register <a href="/registration"><u>here</u></a></span>
			</div>

		</div>

	</form>

@endsection