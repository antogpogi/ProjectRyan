@extends('single')

@section('title','Board of Trustees')
@section('stylesheets')
    {!!Html::style('css/ellipsi.css') !!}
    {!!Html::style('css/rosete.css')!!}
@endsection

@section('content')
	<div class="row">
		<div class="col-md-12">
			<center><h1 class="taytel">Board of Trustees & Members</h1></center>
			<hr class="bottom-line">
			<div class="row">
				<div class="col-md-4">
					<h3>President</h3>
					<h3>Vice-President</h3>
					<h3>Secretary/Treasurer</h3>
					<h3>Members</h3>
				</div>

				<i><div class="col-md-8">
					<h3 class="gray">- Mr. Benjamin B. Domingo Sr.</h3>
					<h3 class="gray">- Mrs. Virginia P. Domingo</h3>
					<h3 class="gray">- Mrs. Josefina Domingo-Garcia</h3>
					<h3 class="gray">- Mrs. Gloria Domingo-Rosales</h3>
					<h3 class="gray">- Mr. Romeo P. Domingo</h3>
					<h3 class="gray">- Mr. Edgardo P. Domingo</h3>
					<h3 class="gray">- Ms. Ma. Victoria P. Domingo</h3>
					<h3 class="gray">- Mr. Benjamin P. Domingo Jr.</h3>
					<h3 class="gray">- Mr. Theodore P. Domingo</h3>
					<h3 class="gray">- Mr. Wilfredo M. Rosales</h3>
					<h3 class="gray">- Mr. Renzy M. Garcia</h3>
				</div></i>

			</div>

		</div>
	</div>

@endsection