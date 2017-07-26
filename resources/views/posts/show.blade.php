@extends('layouts.master')

@section('content')

	<div>
		
		<hr class="style2">

		<div class="title">

			<u>

				{{ $post->title }}

			</u>

		</div>

		<div class="storyInfo">

			<div>

				&nbsp

				<span class="glyphicon glyphicon-user"></span>

				 by:

				<a href="#">

					{{ $post->user->username }}

				</a>

			</div>

			<div>

				&nbsp

				<span class="glyphicon glyphicon-calendar"></span> :

				<span>{{ $post->created_at->toFormattedDateString() }}</span>

			</div>	
			
		</div> 

		<hr>

		<div>
			<div>
				<div class="thumbnail">
					<img class="img-responsive" src="" alt="image">
				</div>
			</div>
			<p><i><b>Tags:</b></i>
				<span class="tagStory"><a class="TagLink" href="#">Economy</a></span>
				<span class="tagStory"><a class="TagLink" href="#">Tech</a></span>
				<span class="tagStory"><a class="TagLink" href="#">Lifestyle</a></span>
			</p>

			<?= nl2br($post->body);

			?>

		</div>

		<hr class="style1">

	</div>

@endsection