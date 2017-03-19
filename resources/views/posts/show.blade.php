@extends ('layouts.master')

@section ('content')
 	<div class="col-sm-8 blog-main">

      @include ('partials.post')

      <ul class="list-group">
      	@foreach ($post->comments as $comment)
      	<li class="list-group-item">
      		<strong>
      			{{ $comment->created_at->diffForHumans() }} &nbsp;
      		</strong>
			{{ $comment->body }}
      	</li>
      	@endforeach
      </ul>

      <hr>

      <div class="card">
      	<div class="card-block">
      		<form method="POST" action="/posts/{{ $post->id }}/comments">
      			{{ csrf_field() }}

	      		<div class="form-group">
	      			<textarea name="body" placeholder="Your comment here." class="form-control" required></textarea>
	      		</div>
				
				<div class="form-group">
					<button type="submit" class="btn btn-primary">Add comment</button>
				</div>
			</form>

			@include ('partials.errors')
      	</div>
      </div>
  	</div>
@endsection