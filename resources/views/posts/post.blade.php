
@forelse ($posts as $post)
    <div class="col-md-6">
    	<h2 class="title">
			<a href="/post/{{$post->id}}">
				{{ $post->title }}
			</a>
		</h2>
		<div class="thumbnail">
			<img class="img-responsive" src="#" alt="image">
		</div>		
		<div class="caption">
			<p>
				<div class="storyBody">

					<?= nl2br($post->body); ?>

				</div>
			</p>
			<p>
				<a class="btn btn-blue" href="/post/{{$post->id}}" role="button">Read More &raquo;</a>
			</p>
			<hr class="style1">
		</div>
	</div>
@empty
    <p>No Posts</p>
@endforelse
