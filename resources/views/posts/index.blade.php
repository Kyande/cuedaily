@extends('layouts.master')

@section('content')

 	<div>

        @include('posts.carousel')
		
		<div id="fix">

			@include('posts.post')
		
		</div>

 	</div>

@endsection