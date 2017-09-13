@extends('main')

@section('title', '| Courses Offered')

@section('stylesheets')
    {!!Html::style('css/ellipsi.css') !!}
@endsection
@section('box-content')

	   <p class="lead">This is the Courses Offered Post</p>
    <hr class="guhit">
	<a class="Btn btn-labeled Btn-info" href="{{ route('course.create')}}"><span class="btn-label"><i class="fa fa-plus"></i></span> Create new</a>
	<div class="row">
        <div class="box col-md-12">
            <div class="box-inner">
                <div class="box-header well" data-original-title="">
                    <h2>Courses Offered Table</h2>

                </div>
                <div class="box-content">
                    <div class="container">
                    <table class="table table-bordered table-hover">
                      <thead>
				<tr>
					<th>Id_no.</th>
					<th>Title</th>
					<th>slug</th>
					<th>Description</th>
					<th>Action</th>
				</tr>	
					  </thead>
     			<tbody>
				
                    @foreach ($courses as $course)
                    <tr>
					<th>{{$course->id}}</th>
					<td>{{$course->titleCourse}}</td>
					<td>{{$course->slug}}</td>
					<td class="ellipsi">{{$course->bodyCourse}}</td>

                    
					<td>
                        {!! Html::LinkRoute('course.show','View',array($course->id),array('class' =>'Btn Btn-white Btn-sm')) !!}
                        {!! Html::LinkRoute('course.edit','Edit',array($course->id),array('class' =>'Btn Btn-blue Btn-sm')) !!}
                    </td>
				</tr>
                @endforeach
				</tbody>
                    </table>
                    <div class="text-center">
                        {!!$courses->links()!!}

                    </div>
                   
                    </div>
                    </ul>
                </div>
            </div>
        </div>
    </div>
	



@endsection