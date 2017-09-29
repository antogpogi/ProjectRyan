@extends('main')

@section('title','|Create Admin')

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
                <h2><i class="fa fa-bullhorn"></i> Admins</h2>

            </div>
            <div class="box-content">
                                <div class="row">
                    <div class="col-md-8">

                {!!Form::open(array('route'=>'admin.store','data-parsley-validate' =>''))!!}
                    <div class="form-group">
                            <div class="col-md-5">
                        {{Form::label('username','Username:')}}
                        {{Form::text('email',null,array('','placeholder' => 'Email...' , 'class' => 'form-control','required' => ''))}}
                        <br>
                        {{Form::label('password','Password:')}}
                        {{Form::password('password', array('placeholder' => 'Password...','class' => 'form-control password','required' => ''))}}
                        <br>
                        {{Form::label('position','Position:')}}
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
                                   
                                   
                                </dl>
                                  <br>
                                    <dl class="dl-horizontal">
                                   
                                    
                                </dl>
          
                                <hr>
                                <div class="row">
                                    <div class="col-sm-6">
                                         {{Form::submit('Submit',array('class' => 'Btn btn-block Btn-blue ','style' => ''))}}
                                    </div>

                                    <div class="col-sm-6">
                                        
                                        <a href="/admin" class="Btn btn-block Btn-yellow">Cancel</a>
                                    </div>
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
    

<script type="text/javascript">
  $(function() {
    $( "#datepicker" ).datepicker({
        dateFormat: 'MM d,yy'
    });
  });
  </script>

@endsection
