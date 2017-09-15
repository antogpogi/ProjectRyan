@extends('main')

@section('title','Update Admin')

@section('stylesheets')

    {!! Html::style('css/parsley.css') !!}
    {!! Html::style('calendar/flick/jquery-ui.css')!!}
    {!! Html::style('calendar/flick/theme.css')!!}
    {!! Html::style('css/rosete.css')!!}

@endsection


@section('box-content')
     <p class="lead">This is the Admin Panel</p>
    <hr class="guhit">
<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="fa fa-bullhorn"></i> Admin </h2>

            </div>
            <div class="box-content">
                <div class="row">
                    <div class="col-md-8">

                    {!!Form::model($admin,['route' => ['admin.update',$admin->id],'method' => 'PUT','files' =>'true'])!!}
                        <div class="form-group">
                            <div class="col-md-5">
                                {{Form::label('username','Username:')}}
                                {{Form::text('username',null,array('','placeholder' => 'Username...' , 'class' => 'form-control','required' => ''))}}
                                 <br>
                                {{Form::label('password','Password:')}}
                                {{Form::text('password',null,array('','placeholder' => 'Password...' , 'class' => 'form-control','required' => ''))}}
                                <br>
                                 {{Form::label('pos','Position:')}}
                                 {{Form::text('position',null,array('','placeholder' => 'Position...' , 'class' => 'form-control','required' => ''))}}
                            </div>                       
                        </div>
                        <br>
                    </div>
                    <br>
                    <br>
                        <div class="col-md-4">
                            <div class="well">
                                <dl class="dl-horizontal">
                                   <dt>Create At:</dt>
                                    <dd>{{ date('M j,Y h:ia',strtotime($admin->created_at))}}</dd>
                                   
                                </dl>
                                  <br>
                                    <dl class="dl-horizontal">
                                   <dt>Last Updated:</dt>
                                    <dd>{{ date('M j,Y h:ia',strtotime($admin->updated_at))}}</dd>
                                    
                                </dl>
          
                                <hr>
                                <div class="row">

                                   <div class="col-sm-6">
                                        {!! Html::LinkRoute('admin.show','Cancel',array($admin->id),array('class' =>'Btn btn-block Btn-yellow')) !!}
                                    </div>

                                    <div class="col-sm-6">
                                        {{Form::submit('Save Changes',['class' =>'Btn btn-block Btn-blue'])}}

                                    </div>


                            </div>

                        </div>

                        {!!Form::close()!!}

            </div>
        </div>
    </div>
</div>



@endsection

@section('scripts')
    
    {!! Html::script('js/parsley.min.js')!!}
    {!! Html::script('calendar/jquery-1.12.4.js')!!}
    {!! Html::script('calendar/jquery-ui.js')!!}
    


@endsection


