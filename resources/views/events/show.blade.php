@extends('main')

@section('title','| Edit Events')

@section('stylesheets')

 	{!!Html::style('css/ellipsi.css') !!}
    {!!Html::style('css/rosete.css')!!}

@endsection

@section('box-content')
    <p class="lead">This is the Upcoming Events Post</p>
        <hr class="guhit">
<div class="row">
	<div class="container-fluid">
		<ul class="breadcrumb breadcrumb-size">
			<li><a href="{{route('events.create')}}">Add new Events</a></li>
			<li><a href="{{route('events.index')}}">View All</a></li>
		</ul>
	</div>
</div>

<div class="row">
        <div class="box col-md-12">
            <div class="box-inner">
                <div class="box-header well" data-original-title="">
                    <h2>Upcoming events</h2>

                </div>
                <div class="box-content">
                    <div class="row">
                        <div class="col-md-8">

                            <h1 class="h1-tag capital-letter">{{$event->titleEvents}}</h1>
                            <br>
                              	<h4 class="h1-gray">{{$event->dateEvents}}</h4>
  								<h4 class="h1-gray">{{$event->timeAmEvents}}am - {{$event->timePmEvents}}pm</h4>

                            <p  class="lead break-word">{{$event->bodyEvents}}</p>
                        </div>
                        <div class="col-md-4">
                            <div class="well">
                                <dl class="dl-horizontal">
                                    <dt>Create At:</dt>
                                    <dd>{{ date('M j,Y g:ia',strtotime($event->created_at))}}</dd>
                                </dl>
                                    <dl class="dl-horizontal">
                                    <dt>Last Updated:</dt>
                                    <dd>{{ date('M j,Y g:ia',strtotime($event->updated_at))}}</dd>
                                </dl>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-6">
                                        {!! Html::LinkRoute('events.edit','Edit',array($event->id),array('class' =>'Btn Btn-info btn-block')) !!}
                                    </div>

                                    <div class="col-sm-6">
                                        {!!Form::open(['route' => ['events.destroy',$event->id],'method' => 'DELETE','onsubmit' => "return confirm('Are you sure you want to delete?')"])!!}

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