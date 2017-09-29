@extends('main')

@section('title', '| Admin')

@section('stylesheets')
    {!!Html::style('css/ellipsi.css') !!}
@endsection
@section('box-content')

	   <p class="lead">This is the Admin Panel</p>
    <hr class="guhit">
	<a class="Btn btn-labeled Btn-info" href="{{ route('admin.create')}}"><span class="btn-label"><i class="fa fa-plus"></i></span> Create new</a>
	<div class="row">
        <div class="box col-md-12">
            <div class="box-inner">
                <div class="box-header well" data-original-title="">
                    <h2>Admin Table</h2>

                </div>
                <div class="box-content">
                    <div class="container">
                    <table class="table table-bordered table-hover">
                      <thead style="">
				<tr>
					<th>Id_no.</th>
					<th>Username</th>
					<th>Password</th>
					<th>Position</th>
					<th>Action</th>
				</tr>	
					  </thead>
     			<tbody>
				
                    @foreach ($admin as $ad)
                    <tr>
					<th>{{$ad->id}}</th>
					<td>{{$ad->email}}</td>
					<td class="ellipsi">{{ bcrypt($ad->password) }}</td>
					<td>{{$ad->position}}</td>

                    
					<td>
                        {!! Html::LinkRoute('admin.show','View',array($ad->id),array('class' =>'Btn Btn-white Btn-sm')) !!}
                        {!! Html::LinkRoute('admin.edit','Edit',array($ad->id),array('class' =>'Btn Btn-blue Btn-sm')) !!}
                    </td>
				</tr>
                @endforeach
				</tbody>
                    </table>
                    <div class="text-center">
                        {!!$admin->links()!!}

                    </div>
                   
                    </div>
                    </ul>
                </div>
            </div>
        </div>
    </div>
	



@endsection