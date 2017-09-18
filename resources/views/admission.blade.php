@extends('single')

@section('title',"| Admissions")
@section('stylesheets')
    {!!Html::style('css/ellipsi.css') !!}
    {!!Html::style('css/rosete.css')!!}
@endsection
@section('content')
	
	<div class="row">
		<div class="col-md-12">

		<h1 class="capital-letter">Admission Requirements</h1>
		<hr class="bottom-line">
		<br>
		<br>
		<h2 class="taytel">PRE-SCHOOL</h2>
		<p> - Original & Xerox copy of Birth Certificate & Report Card</p>	
		<br>
		<h2 class="taytel">GRADE 1</h2>
		<p> - a) Certication or Diploma of Completion in the Preparatory Course <br>
		 &nbsp; b) Original & Xerox Copy of Birth Certificate <br> &nbsp; c) Copy of Report Card (Form-138) </p>

		 <br>

		 <h2 class="taytel">GRADE 7</h2>
		 <p> - a) Diploma of Completion in the Elementary Course <br> &nbsp; b) Original & Xerox Copy of Birth Certificate
		 	<br> &nbsp; c) Copy of Report Card (Form-138) w/ LRN</p>

		 <h2 class="taytel">GRADE 11</h2>
		 <p> - a) Certification of Completion in Junior HS & Report Card <br> &nbsp; b) Certificate of Good Moral Character</p>
		 <br>
		  <h2 class="taytel">FOR TRANSFEREES</h2>
		  <p> - a) Certificate of Good Moral Character <br> &nbsp; b) Original & Xerox Copy of Birth Certificate <br> &nbsp; c) Report Card & Diploma of Certifica</p>
		</div>


	</div>	
<hr class="bottom-line">
	<div class="row">
		<div class="col-md-12">
			<h1 class="capital-letter">TUITION & MISCELLANEOUS FEES</h1>
			<br>
			<br>
			<table class="table">
				<thead class="taytel">
					<th>LEVEL</th>
					<th>&nbsp;</th>
					<th>DOWN PAYMENT</th>
					<th>COMPUTER FEE</th>
					<th>MONTHLY</th>
				</thead>
				<tbody>

					@foreach($tuitions as $tuition)
						@if($tuition->title == 'PRE-SCHOOL')
						<tr>
							<th class="sub-title">{{$tuition->title}}</th>
							<th>{{$tuition->level}}</th>
							<td>{{$tuition->downPayment}}</td>
							<td>{{$tuition->computerFee}}</td>
							<td>{{$tuition->monthlyFee}}</td>
						</tr>
						@endif

						

						@if($tuition->title =='ELEMENTARY')
						<tr>
							<th class="sub-title">{{$tuition->title}}</th>
							<th>{{$tuition->level}}</th>
							<td>{{$tuition->downPayment}}</td>
							<td>{{$tuition->computerFee}}</td>
							<td>{{$tuition->monthlyFee}}</td>
						</tr>
						@endif


					@endforeach					
					@foreach($tuitions as $tuition)
					@if($tuition->title =='JUNIOR HIGH SCHOOL')					
						<tr>
							<th class="sub-title">{{$tuition->title}}</th>
							<th>{{$tuition->level}}</th>
							<td>{{$tuition->downPayment}}</td>
							<td>{{$tuition->computerFee}}</td>
							<td>{{$tuition->monthlyFee}}</td>
						</tr>
						@endif
					@endforeach
					@foreach($tuitions as $tuition)
					@if($tuition->title =='SENIOR HIGH SCHOOL')					
						<tr>
							<th class="sub-title">{{$tuition->title}}</th>
							<th>{{$tuition->level}}</th>
							<td>{{$tuition->downPayment}}</td>
							<td>{{$tuition->computerFee}}</td>
							<td>{{$tuition->monthlyFee}}</td>
						</tr>
						@endif
					@endforeach
											
				</tbody>

			</table>

			</div>

		</div>
		<br>
			<h1 class="capital-letter">DISCOUNTS:</h1>
			<br>
			<br>
			<div class="col-md-8">
			<table class="table">
				<tbody>
					@foreach($discounts as $discount)
					<tr>
						<th class="capital-letter">{{$discount->titleDiscount}}</th>
						<td>{{$discount->percent}}%</td>
					</tr>	
					@endforeach														
				</tbody>

			</table>

			</div>




	</div>

		
@endsection