@extends('main')

@section('title', '| Edit Staff')

@section('stylesheets')
    {!!Html::style('css/ellipsi.css') !!}
    {!!Html::style('css/rosete.css')!!}
@endsection
@section('box-content')
    
    <p class="lead">This is the Staff Member Details</p>
    <hr class="guhit">
    <div class="row">
        <div class="container-fluid">
        <ul class="breadcrumb breadcrumb-size">
            <li>
                <a href="{{ route('staff.create')}}">Add new Staff Member</a>
            </li>
            <li>
                <a href="{{ route('staff.index')}}"> View All</a>
            </li>
        </ul>
    </div>
    </div>


     <div class="row">
        <div class="box col-md-12">
            <div class="box-inner">
                <div class="box-header well" data-original-title="">
                    <h2>Staff</h2>

                </div>
                <div class="box-content">
                    <div class="row">
                        <center><div class="col-md-8">
                            <img src="{{ asset('images/' . $staff->imageStaff)}}" class="img-responsive">
                            <br>
                            <label>Name: </label>
                            <h1 class="h1-tag capital-letter">{{$staff->firstName}} {{$staff->middleName}} {{$staff->lastName}}</h1>
                            <br>
                            <label>Position :</label>
                            <p  class="lead break-word">{{$staff->position}}</p>
                        </div></center>
                        <div class="col-md-4">
                            <div class="well">
                                <dl class="dl-horizontal">
                                    <label>Create At:</label>
                                    <p>{{ date('M j,Y h:ia',strtotime($staff->created_at))}}</p>
                                </dl>
                                    <dl class="dl-horizontal">
                                    <label>Last Updated:</label>
                                    <p>{{ date('M j,Y h:ia',strtotime($staff->updated_at))}}</p>
                                </dl>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-6">
                                        {!! Html::LinkRoute('staff.edit','Edit',array($staff->id),array('class' =>'Btn Btn-info btn-block')) !!}
                                    </div>

                                    <div class="col-sm-6">
                                        {!!Form::open(['route' => ['staff.destroy',$staff->id],'method' => 'DELETE','onsubmit' => "return confirm('Are you sure you want to delete?')"])!!}

                                        {!! Form::submit('Delete',[ 'class' => 'Btn btn-block Btn-red'])!!}

                                        {!! Form::close()!!}
                                    </div>
                                            <div class="col-md-12">
                                        <br>
                                            <a href="/staff" class="Btn btn-block Btn-white"><i class="fa fa-arrow-left"> Back</i></a>
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