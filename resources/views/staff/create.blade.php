@extends('main')

@section('title','Create Staff')

@section('stylesheets')

    {!! Html::style('css/parsley.css') !!}
    {!! Html::style('calendar/flick/jquery-ui.css')!!}
    {!! Html::style('calendar/flick/theme.css')!!}
    {!! Html::style('css/rosete.css')!!}

@endsection


@section('box-content')
	 <p class="lead">This is the Staff Post</p>
    <hr class="guhit">
<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="fa fa-bullhorn"></i> Staff</h2>

            </div>
            <div class="box-content">
                                <div class="row">
                    <div class="col-md-8">

                	{!!Form::open(array('route'=>'staff.store','data-parsley-validate' =>'','files' =>'true'))!!}
                    <div class="form-group">
                            <div class="col-md-5">
                        {{Form::label('Firstname','First Name:')}}
                        {{Form::text('firstName',null,array('','placeholder' => 'First name...' , 'class' => 'form-control capital-letter','required' => ''))}}
                        <br>
                        {{Form::label('Middlename','Middle Name:')}}
                        {{Form::text('middleName',null,array('','placeholder' => 'Middle name...' , 'class' => 'form-control capital-letter'))}}
                        <br>
                            </div>                       
                        </div>

                            <div class="form-group">
                                <div class="col-md-6">
                        {{Form::label('Lastname','Last Name:')}}
                        {{Form::text('lastName',null,array('','placeholder' => 'Last name...' , 'class' => 'form-control capital-letter','required' => ''))}}
                        <br>
                        {{Form::label('pos','Position:')}}
                        {{Form::text('position',null,array('','placeholder' => 'Position...' , 'class' => 'form-control capital-letter','required' => ''))}}
                        <br>
                        {{Form::label('imageStaff','Upload Image:')}}
                        {{Form::file('imageStaff')}}
                        <br>
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
                                        
                                        <a href="/staff" class="Btn btn-block Btn-yellow">Cancel</a>
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


