@extends('single')

@section('title',"| $course->titleCourse")
@section('stylesheets')
    {!!Html::style('css/ellipsi.css') !!}
    {!!Html::style('css/rosete.css')!!}
@endsection
@section('content')
	
	<div class="row">
		<div class="col-md-12">

		<h1 class="capital-letter">{{$course->titleCourse}}</h1>
		<hr class="bottom-line">
		<br>
		<br>
		<img src="{{ asset('images/' . $course->imageCourse)}}" class="img-responsive">
		<br>
		<br>
		<hr>
		<p>{{$course->bodyCourse}}</p>	
		</div>

	</div>	

		
@endsection