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
					<th>DOWN PAYMENT</th>
					<th>COMPUTER FEE</th>
					<th>MONTHLY</th>
				</thead>
				<tbody>
					<tr>
						<th>PRE-SCHOOL ELEMENTARY</th>
						<td>3,000.00</td>
						<td>500.00</td>
						<td>750.00</td>
					</tr>
					<tr>
						<th>GRADE 1-3</th>
						<td>3,000.00</td>
						<td>550.00</td>
						<td>850.00</td>
					</tr>

					<tr>
						<th>GRADE 4-6</th>
						<td>3,000.00</td>
						<td>650.00</td>
						<td>880.00</td>
					</tr>

					<tr>
						<th class="taytel">HIGH SCHOOL JUNIOR HS</th>

					</tr>	

					<tr>
						<th>GRADE 7-10</th>
						<td>3,500.00</td>
						<td>750.00</td>
						<td>950.00</td>
					</tr>

					<tr>
						<th class="taytel">SENIOR HIGH SCHOOL (PER SEMESTER)</th>

					</tr>		

					<tr>
						<th>GRADE 11-12</th>
						<td>3,500.00</td>
						<td>800.00</td>
						<td>4,550.00</td>
					</tr>												
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
					<tr>
						<th>Valedictorians/First Honors</th>
						<td>-100%</td>
					</tr>	
					<tr>
						<th>Salutatorian/Second Honors</th>
						<td>-50%</td>
					</tr>	
					<tr>
						<th>Third/Fifth Honors</th>
						<td>-50%</td>
					</tr>		
					<tr>
						<th>Brothers & Sisters</th>
						<td>-5%</td>
					</tr>
					<tr>
						<th>Gov't Employees</th>
						<td>-5%</td>
					</tr>
					<tr>
						<th>Cash Payments</th>
						<td>-5%</td>
					</tr>																								
				</tbody>

			</table>

			</div>




	</div>

		
@endsection