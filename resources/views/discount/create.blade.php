@extends('main')

@section('title','| Create Discount')

@section('stylesheets')

    {!! Html::style('css/parsley.css') !!}
    {!! Html::style('calendar/flick/jquery-ui.css')!!}
    {!! Html::style('calendar/flick/theme.css')!!}
    {!! Html::style('css/rosete.css')!!}


@endsection

@section('box-content')
    <p class="lead">This is the Discount Post</p>
        <hr class="guhit">
<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well">
                <h2><i class="fa fa-thumb-tack"></i> Discount</h2>
            </div>
            <div class="box-content">
                <div class="row">
                    <div class="col-md-8">
                        {!!Form::open(array('route'=>'discount.store','data-parsley-validate' => ''))!!}
                        <div class="form-group">
                            <div class="col-md-5">
                                {{Form::label('titles','Title:')}}
                                {{Form::text('titleDiscount',null,array('placeholder' => 'Title...','class' => 'form-control capital-letter','required' => ''))}}
                                <br>
                             
                            </div>

                            <div class="form-group">
                                <div class="col-md-3">
                                     {{Form::label('percentage','Percentage:')}}
                                    <div class="input-group">
                                    <span class="input-group-addon">%</span>
                                    {{Form::text('percent',null,array('placeholder' => 'Percent...','class' => 'form-control','required' => '','onkeypress="if(event.keyCode<48 || event.keyCode>57)event.returnValue=false;"'))}}    
                                    </div>
                                                                              
                                <br>

                                <br>
                                </div>
                            </div>

                        </div>
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
                                        
                                        <a href="/discount" class="Btn btn-block Btn-yellow">Cancel</a>
                                    </div>
                                </div>

                                </div>
                            </div>

                </div>
            </div>
            {{Form::close()}}

        </div>
    </div>
</div>



@endsection

@section('scripts')
    
    {!! Html::script('js/parsley.min.js')!!}
    {!! Html::script('calendar/jquery-1.12.4.js')!!}
    {!! Html::script('calendar/jquery-ui.js')!!}
    

@endsection