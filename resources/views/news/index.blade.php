@extends('main')

@section('title', '| Courses Offered')

@section('stylesheets')
    {!!Html::style('css/ellipsi.css') !!}
@endsection
@section('box-content')

	   <p class="lead">This is the News Post</p>
    <hr class="guhit">
	<a class="Btn btn-labeled Btn-info" href="{{ route('news.create')}}"><span class="btn-label"><i class="fa fa-plus"></i></span> Create new</a>
	<div class="row">
        <div class="box col-md-12">
            <div class="box-inner">
                <div class="box-header well" data-original-title="">
                    <h2>News Table</h2>

                </div>
                <div class="box-content">
                    <table class="table table-bordered table-hover">
                      <thead>
				<tr>
					<th>Id_no.</th>
					<th>Title</th>
					<th>slug</th>
                    <th>Image</th>
					<th>Description</th>
					<th>Action</th>
				</tr>	
					  </thead>
     			<tbody>
				
                    @foreach ($lnews as $lnew)
                    <tr>
					<th>{{$lnew->id}}</th>
					<td>{{$lnew->titleNews}}</td>
                    <td>{{$lnew->slug}}</td>
                    <td class="ellipsi">{{$lnew->imageNews}}</td>
					<td class="ellipsi">{{$lnew->bodyNews}}</td>

                    
					<td>
                        {!! Html::LinkRoute('news.show','View',array($lnew->id),array('class' =>'Btn Btn-white Btn-sm')) !!}
                        {!! Html::LinkRoute('news.edit','Edit',array($lnew->id),array('class' =>'Btn Btn-blue Btn-sm')) !!}
                    </td>
				</tr>
                @endforeach
				</tbody>
                    </table>
                    <div class="text-center">
                        {!!$lnews->links()!!}

                    </div>
                   
                    </div>
                    </ul>
                </div>
        </div>
    </div>
	



@endsection