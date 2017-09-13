@extends('single')

@section('title',"| $lnew->titleNews")
@section('stylesheets')
    {!!Html::style('css/ellipsi.css') !!}
    {!!Html::style('css/rosete.css')!!}
@endsection
@section('content')
	
	<div class="row">
		<div class="col-md-12">

		<h1 class="capital-letter">{{$lnew->titleNews}}</h1>
		<hr class="bottom-line">
		<br>
		<br>
		<img src="{{ asset('images/' . $lnew->imageNews)}}" class="img-responsive">
		<br>
		<br>
		<hr>
		<p>{{$lnew->bodyNews}}</p>	
		</div>

	</div>	

		
@endsection