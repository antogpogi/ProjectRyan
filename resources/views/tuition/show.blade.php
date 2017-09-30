@extends('main')

@section('title','| Edit Tuition')

@section('stylesheets')

 	{!!Html::style('css/ellipsi.css') !!}
    {!!Html::style('css/rosete.css')!!}

@endsection

@section('box-content')
    <p class="lead">This is the Tuition Post</p>
        <hr class="guhit">
<div class="row">
	<div class="container-fluid">
		<ul class="breadcrumb breadcrumb-size">
			<li><a href="{{route('tuition.create')}}">Add new Tuition</a></li>
			<li><a href="{{route('tuition.index')}}">View All</a></li>
		</ul>
	</div>
</div>

<div class="row">
        <div class="box col-md-12">
            <div class="box-inner">
                <div class="box-header well" data-original-title="">
                    <h2>Tuition</h2>

                </div>
                <div class="box-content">
                    <div class="row">
                        <center><div class="col-md-8">

                            <h1 class="h1-tag capital-letter">{{$tuition->title}}</h1>
                            <br>
                            <h4 class="h1-gray capital-letter">{{$tuition->level}}</h4>
                            <h4 class="h1-gray">Down Payment - &nbsp;{{$tuition->downPayment}}</h4>
                            <h4 class="h1-gray">Computer Fee - &nbsp;{{$tuition->computerFee}}</h4>
                            <h4 class="h1-gray">Monthly Fee - &nbsp;{{$tuition->monthlyFee}}</h4>

                            <br>
                              	                     
                        </div></center>
                        <div class="col-md-4">
                            <div class="well">
                                <dl class="dl-horizontal">
                                    <dt>Create At:</dt>
                                    <dd>{{ date('M j,Y g:ia',strtotime($tuition->created_at))}}</dd>
                                </dl>
                                    <dl class="dl-horizontal">
                                    <dt>Last Updated:</dt>
                                    <dd>{{ date('M j,Y g:ia',strtotime($tuition->updated_at))}}</dd>
                                </dl>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-6">
                                        {!! Html::LinkRoute('tuition.edit','Edit',array($tuition->id),array('class' =>'Btn Btn-info btn-block')) !!}
                                    </div>

                                    <div class="col-sm-6">
                                        {!!Form::open(['route' => ['tuition.destroy',$tuition->id],'method' => 'DELETE','onsubmit' => "return confirm('Are you sure you want to delete?')"])!!}

                                        {!! Form::submit('Delete',[ 'class' => 'Btn btn-block Btn-red'])!!}

                                        {!! Form::close()!!}

                                       
                                    </div>
                                    <div class="col-md-12">
                                        <br>
                                            <a href="/tuition" class="Btn btn-block Btn-white"><i class="fa fa-arrow-left"> Back</i></a>
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