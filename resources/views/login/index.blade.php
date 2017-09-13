@extends('main')

@section('title', '| SVLA')

@section('stylesheets')
    {!!Html::style('css/ellipsi.css') !!}
@endsection
@section('box-content')

{!!Form::open(array('route'=>'login.login','data-parsley-validate' =>'','files' =>'true'))!!}
    <div class="form-group">
        <div class="col-md-5">
            {{Form::label('Username','Username:')}}
            {{Form::text('username',null,array('','placeholder' => 'Username...' , 'class' => 'form-control','required' => ''))}}
            <br>
            {{Form::label('Password','Password:')}}
            {{Form::text('password',null,array('','placeholder' => 'Password...' , 'class' => 'form-control','required' => ''))}}
            <br>
            {{Form::submit('Submit',array('class' => 'Btn btn-block Btn-blue ','style' => ''))}}
        </div>
    </div>
{!!Form::close();!!}
@endsection