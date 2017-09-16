@extends('main')

@section('title', '| PTA Offered')

@section('stylesheets')
    {!!Html::style('css/ellipsi.css') !!}
@endsection
@section('box-content')

	   <p class="lead">This is the PTA Post</p>
    <hr class="guhit">
	<a class="Btn btn-labeled Btn-info" href="{{ route('pta.create')}}"><span class="btn-label"><i class="fa fa-plus"></i></span> Create new</a>
	<div class="row">
        <div class="box col-md-12">
            <div class="box-inner">
                <div class="box-header well" data-original-title="">
                    <h2>PTA Table</h2>

                </div>
                <div class="box-content">
                    <div class="container">
                    <table class="table table-bordered table-hover">
                      <thead>
				<tr>
					<th>Id_no.</th>
					<th>First_name</th>
					<th>Last_name</th>
					<th>Middle_initials</th>
                    <th>Position</th>
                    <th>slug</th>
					<th>Action</th>
				</tr>	
					  </thead>
     			<tbody>
				
                    @foreach ($ptas as $pta)
                    <tr>
					<th>{{$pta->id}}</th>
					<td>{{$pta->ptaFname}}</td>   
                    <td>{{$pta->ptaLname}}</td>         
                    <td>{{$pta->ptaMi}}</td>
                    <td>{{$pta->ptaPosition}}</td>
					<td>{{$pta->slug}}</td>
					

                    
					<td>
                        {!! Html::LinkRoute('pta.show','View',array($pta->id),array('class' =>'Btn Btn-white Btn-sm')) !!}
                        {!! Html::LinkRoute('pta.edit','Edit',array($pta->id),array('class' =>'Btn Btn-blue Btn-sm')) !!}
                    </td>
				</tr>
                @endforeach
				</tbody>
                    </table>
                    <div class="text-center">
                        {!!$ptas->links()!!}

                    </div>
                   
                    </div>
                    </ul>
                </div>
            </div>
        </div>
    </div>
	



@endsection