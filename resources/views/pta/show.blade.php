@extends('main')

@section('title', '| Edit Post')

@section('stylesheets')
    {!!Html::style('css/ellipsi.css') !!}
    {!!Html::style('css/rosete.css')!!}
@endsection
@section('box-content')
	
	<p class="lead">This is the PTA Post</p>
    <hr class="guhit">
    <div class="row">
        <div class="container-fluid">
        <ul class="breadcrumb breadcrumb-size">
            <li>
                <a href="{{ route('pta.create')}}">Add new News</a>
            </li>
            <li>
                <a href="{{ route('pta.index')}}"> View All</a>
            </li>
        </ul>
    </div>
    </div>


	 <div class="row">
        <div class="box col-md-12">
            <div class="box-inner">
                <div class="box-header well" data-original-title="">
                    <h2>PTA</h2>

                </div>
                <div class="box-content">
                    <div class="row">
                        <div class="col-md-8">
                          
                            <h1 class="h1-tag capital-letter">{{$pta->ptaMrs}}.&nbsp;{{$pta->ptaFname}}&nbsp;{{$pta->ptaLname}}&nbsp;{{$pta->ptaMi}}</h1>
                            <br>
                            <p  class="lead break-word">{{$pta->ptaPosition}}</p>
                        </div>
                        <div class="col-md-4">
                            <div class="well">
                                <dl class="dl-horizontal">
                                    <label>Url:</label>
                                  <p>{{$pta->slug}}</p>
                                </dl>
                                <dl class="dl-horizontal">
                                    <label>Create At:</label>
                                    <p>{{ date('M j,Y h:ia',strtotime($pta->created_at))}}</p>
                                </dl>
                                    <dl class="dl-horizontal">
                                    <label>Last Updated:</label>
                                    <p>{{ date('M j,Y h:ia',strtotime($pta->updated_at))}}</p>
                                </dl>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-6">
                                        {!! Html::LinkRoute('pta.edit','Edit',array($pta->id),array('class' =>'Btn Btn-info btn-block')) !!}
                                    </div>

                                    <div class="col-sm-6">
                                        {!!Form::open(['route' => ['pta.destroy',$pta->id],'method' => 'DELETE','onsubmit' => "return confirm('Are you sure you want to delete?')"])!!}

                                        {!! Form::submit('Delete',[ 'class' => 'Btn btn-block Btn-red'])!!}

                                        {!! Form::close()!!}
                                    </div>
                                            <div class="col-md-12">
                                        <br>
                                            <a href="/pta" class="Btn btn-block Btn-white"><i class="fa fa-arrow-left"> Back</i></a>
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