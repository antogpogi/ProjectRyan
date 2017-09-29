@extends('main')

@section('title', '| Edit Admin')

@section('stylesheets')
    {!!Html::style('css/ellipsi.css') !!}
    {!!Html::style('css/rosete.css')!!}
@endsection
@section('box-content')
    
    <p class="lead">This is the Admin Panel</p>
    <hr class="guhit">
    <div class="row">
        <div class="container-fluid">
        <ul class="breadcrumb breadcrumb-size">
            <li>
                <a href="{{ route('admin.create')}}">Add new Admin</a>
            </li>
            <li>
                <a href="{{ route('admin.index')}}"> View All</a>
            </li>
        </ul>
    </div>
    </div>


     <div class="row">
        <div class="box col-md-12">
            <div class="box-inner">
                <div class="box-header well" data-original-title="">
                    <h2>admin</h2>

                </div>
                <div class="box-content">
                    <div class="row">
                        <div class="col-md-8">
                            <label>Username</label>
                            <p class="lead break-word">{{$admin->email}}</p>
                            <br>
                            <label>Password</label>
                            <p  class="lead break-word">{{$admin->password}}</p>
                            <br>
                            <label>Position</label>
                            <p  class="lead break-word">{{$admin->position}}</p>
                        </div>
                        <div class="col-md-4">
                            <div class="well">
                                <dl class="dl-horizontal">
                                    <label>Create At:</label>
                                    <p>{{ date('M j,Y h:ia',strtotime($admin->created_at))}}</p>
                                </dl>
                                    <dl class="dl-horizontal">
                                    <label>Last Updated:</label>
                                    <p>{{ date('M j,Y h:ia',strtotime($admin->updated_at))}}</p>
                                </dl>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-6">
                                        {!! Html::LinkRoute('admin.edit','Edit',array($admin->id),array('class' =>'Btn Btn-info btn-block')) !!}
                                    </div>

                                    <div class="col-sm-6">
                                        {!!Form::open(['route' => ['admin.destroy',$admin->id],'method' => 'DELETE','onsubmit' => "return confirm('Are you sure you want to delete?')"])!!}

                                        {!! Form::submit('Delete',[ 'class' => 'Btn btn-block Btn-red'])!!}

                                        {!! Form::close()!!}
                                    </div>
                                            <div class="col-md-12">
                                        <br>
                                            <a href="/admin" class="Btn btn-block Btn-white"><i class="fa fa-arrow-left"> Back</i></a>
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