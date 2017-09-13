@extends('main')

@section('title', '| Blog')


@section('box-content')
	<div class="row">
		<div class="col-md-12">
			<h1>Blog</h1>
		</div>
	</div>

	@foreach ($posts as $post)
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<h2>{{$post->titleAnnouncement}}</h2>
			<h5>Published: {{ date('M j,Y h:ia',strtotime($post->created_at))}}</h5>
			<p>{{substr($post->bodyAnnounement,0,250)}} {{strlen($post->bodyAnnouncement)> 250 ? '...' : ""}}</p>

			<a href="{{route('blog.single', $post->id)}}">Read More</a>
		</div>
	</div>
	@endforeach
@endsection