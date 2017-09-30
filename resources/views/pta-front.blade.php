@extends('single')

@section('title','Board of Trustees')
@section('stylesheets')
    {!!Html::style('css/ellipsi.css') !!}
    {!!Html::style('css/rosete.css')!!}
@endsection

@section('content')
	<div class="row">
		<div class="col-md-12">
			<center><h1 class="taytel">Parents - Teachers Association Officers</h1></center>
			<hr class="bottom-line">
			@foreach($ptas as $pta)
			<div class="row">
				<div class="col-md-4">
					<h3>{{$pta->ptaPosition}}</h3>
				</div>
				<i><div class="col-md-8">
					<h3 class="gray">{{$pta->ptaMrs}}.&nbsp;<span class="capital-letter">{{$pta->ptaFname}}<span>&nbsp;<span class="capital-letter">{{$pta->ptaLname}}</span>&nbsp;<span class="all-caps">{{$pta->ptaMi}}</span>.</h3>
				</div></i>

			</div>
				@endforeach
		</div>
	</div>

@endsection