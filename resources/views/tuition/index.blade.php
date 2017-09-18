@extends('main')

@section('title', '| Tuition')

@section('stylesheets')
    {!!Html::style('css/ellipsi.css') !!}
@endsection
@section('box-content')

	   <p class="lead">This is the Tuition Post</p>
    <hr class="guhit">
	<a class="Btn btn-labeled Btn-info" href="{{ route('tuition.create')}}"><span class="btn-label"><i class="fa fa-plus"></i></span> Create new</a>
	<div class="row">
        <div class="box col-md-12">
            <div class="box-inner">
                <div class="box-header well" data-original-title="">
                    <h2>Tuition Table</h2>

                </div>
                <div class="box-content">
                    <div class="container">
                    <table class="table table-bordered table-hover">
                      <thead>
				<tr>
					<th>Id_no.</th>
                    <th>Category</th>
					<th>Title</th>                   
					<th>Down_Payment</th>
					<th>Computer_Fee</th>
                    <th>Monthly_Fee</th>
					<th>Action</th>
				</tr>	
					  </thead>
     			<tbody>
				
                    @foreach ($tuitions as $tuition)
                    <tr>
					<th>{{$tuition->id}}</th>
					<td>{{$tuition->level}}</td>
                    <td>{{$tuition->title}}</td>   
                    <td>{{$tuition->downPayment}}</td>         
                    <td>{{$tuition->computerFee}}</td>
                    <td>{{$tuition->monthlyFee}}</td>

					

                    
					<td>
                        {!! Html::LinkRoute('tuition.show','View',array($tuition->id),array('class' =>'Btn Btn-white Btn-sm')) !!}
                        {!! Html::LinkRoute('tuition.edit','Edit',array($tuition->id),array('class' =>'Btn Btn-blue Btn-sm')) !!}
                    </td>
				</tr>
                @endforeach
				</tbody>
                    </table>
                    <div class="text-center">
                        {!!$tuitions->links()!!}

                    </div>
                   
                    </div>
                    </ul>
                </div>
            </div>
        </div>
    </div>
	



@endsection