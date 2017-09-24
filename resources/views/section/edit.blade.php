@extends('main')

@section('title', '| Course')

@section('stylesheets')
    {!!Html::style('css/ellipsi.css') !!}
    {!!Html::style('css/rosete.css')!!}
@endsection
@section('box-content')
	
	<p class="lead">This is the Course Offered Post</p>
    <hr class="guhit">
    <div class="row">
        <div class="container-fluid">
        <ul class="breadcrumb breadcrumb-size">
            <li>
                <a href="{{ route('course.create')}}">Add new Course Offered</a>
            </li>
            <li>
                <a href="{{ route('course.index')}}"> View All</a>
            </li>
        </ul>
    </div>
    </div>


	 <div class="row">
        <div class="box col-md-12">
            <div class="box-inner">
                <div class="box-header well" data-original-title="">
                    <h2>Course Offered</h2>

                </div>
                <div class="box-content">
                    <div class="row">
                        <div class="col-md-8">
                            <img src="{{ asset('images/'.$course->imageCourse)}}" class="img-responsive">
                            <h1 class="h1-tag capital-letter">{{$course->titleCourse}}</h1>
                            <br>
                            <p  class="lead break-word">{{$course->bodyCourse}}</p>
                            <br>
                            <br>

                            @include('course._sectionedit')

                        </div>
                        <div class="col-md-4">
                            <div class="well">
                                <dl class="dl-horizontal">
                                    <label>Url:</label>
                                  <p><a href="{{route('slug-course.single',$course->slug)}}">{{route('slug-course.single',$course->slug)}}</a></p>
                                </dl>
                                <dl class="dl-horizontal">
                                    <label>Create At:</label>
                                    <p>{{ date('M j,Y h:ia',strtotime($course->created_at))}}</p>
                                </dl>
                                    <dl class="dl-horizontal">
                                    <label>Last Updated:</label>
                                    <p>{{ date('M j,Y h:ia',strtotime($course->updated_at))}}</p>
                                </dl>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-6">
                                        {!! Html::LinkRoute('course.edit','Edit',array($course->id),array('class' =>'Btn Btn-info btn-block')) !!}
                                    </div>

                                    <div class="col-sm-6">
                                        {!!Form::open(['route' => ['course.destroy',$course->id],'method' => 'DELETE','onsubmit' => "return confirm('Are you sure you want to delete?')"])!!}

                                        {!! Form::submit('Delete',[ 'class' => 'Btn btn-block Btn-red'])!!}

                                        {!! Form::close()!!}
                                    </div>
                                            <div class="col-md-12">
                                        <br>
                                            <a href="/course" class="Btn btn-block Btn-white"><i class="fa fa-arrow-left"> Back</i></a>
                                    </div>
                                </div>
                                
                            </div>

                        </div>

                    </div>
                   
                </div>
            </div>
        </div>
    </div><!--/span-->
	



@endsection