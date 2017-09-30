@extends('main')

@section('title', '| Edit Post')

@section('stylesheets')
    {!!Html::style('css/ellipsi.css') !!}
    {!!Html::style('css/rosete.css')!!}
@endsection
@section('box-content')
	
	<p class="lead">This is the Announcement Post</p>
    <hr class="guhit">
    <div class="row">
        <div class="container-fluid">
        <ul class="breadcrumb breadcrumb-size">
            <li>
                <a href="{{ route('announcement.create')}}">Add new Announcement</a>
            </li>
            <li>
                <a href="{{ route('announcement.index')}}"> View All</a>
            </li>
        </ul>
    </div>
    </div>


	 <div class="row">
        <div class="box col-md-12">
            <div class="box-inner">
                <div class="box-header well" data-original-title="">
                    <h2>Announcement</h2>
                </div>
                <div class="box-content">
                    <div class="row">
                        <center><div class="col-md-8">

                            <h1 class="h1-tag capital-letter">{{$post->titleAnnouncement}}</h1>
                            <br>
                            <h4 class="h1-gray">{{$post->dateAnnouncement}}</h4>
                            <p  class="lead break-word">{{$post->bodyAnnouncement}}</p>
                        </div></center>
                        <div class="col-md-4">
                            <div class="well">
                                <dl class="dl-horizontal">
                                    <label>Url:</label>
                                    <p><a href="{{route('blog.single',$post->slug)}}">{{route('blog.single',$post->slug)}}</a></p>
                                </dl>
                                <dl class="dl-horizontal">
                                    <label>Create At:</label>
                                    <p>{{ date('M j,Y h:ia',strtotime($post->created_at))}}</p>
                                </dl>
                                    <dl class="dl-horizontal">
                                    <label>Last Updated:</label>
                                    <p>{{ date('M j,Y h:ia',strtotime($post->updated_at))}}</p>
                                </dl>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-6">
                                        {!! Html::LinkRoute('announcement.edit','Edit',array($post->id),array('class' =>'Btn Btn-info btn-block')) !!}
                                    </div>

                                    <div class="col-sm-6">
                                        {!!Form::open(['route' => ['announcement.destroy',$post->id],'method' => 'DELETE','onsubmit' => "return confirm('Are you sure you want to delete?')"])!!}

                                        {!! Form::submit('Delete',[ 'class' => 'Btn btn-block Btn-red'])!!}

                                        {!! Form::close()!!}
                                    </div>
                                            <div class="col-md-12">
                                        <br>
                                            <a href="/events" class="Btn btn-block Btn-white"><i class="fa fa-arrow-left"> Back</i></a>
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