@extends('single')

@section('title',"| $announcement->titleAnnouncement")
@section('stylesheets')
    {!!Html::style('css/ellipsi.css') !!}
    {!!Html::style('css/rosete.css')!!}
@endsection
@section('content')
	
	<div class="row">
		<div class="col-md-12">

		<h1 class="capital-letter">{{$announcement->titleAnnouncement}}</h1>
		<hr class="bottom-line">
		<br>
		<br>
		<p>{{$announcement->bodyAnnouncement}}</p>	
		</div>

	</div>	

		
@endsection