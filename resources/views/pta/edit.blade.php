@extends('main')

@section('title','Update PTA')

@section('stylesheets')

    {!! Html::style('css/parsley.css') !!}
    {!! Html::style('calendar/flick/jquery-ui.css')!!}
    {!! Html::style('calendar/flick/theme.css')!!}
    {!! Html::style('css/rosete.css')!!}

@endsection


@section('box-content')
     <p class="lead">This is the PTA Post</p>
    <hr class="guhit">
<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="fa fa-bullhorn"></i> PTA</h2>

            </div>
            <div class="box-content">
                                <div class="row">
                    <div class="col-md-8">

                    {!!Form::model($pta,['route' => ['pta.update',$pta->id],'method' => 'PUT','files' =>'true'])!!}
                        <div class="form-group">
                        <div class="col-md-12">
                         <div class="form-inline">
                        {{Form::label('name','Full name:')}}
                        <br>
                        {{ Form::select('ptaMrs', ['Mrs' =>'Mrs','Ms' => 'Ms','Mr' =>'Mr'],null, ['class' => 'form-control']) }}  
                        {{Form::text('ptaFname',null,array('','placeholder' => 'First name...' , 'class' => 'form-control capital-letter','required' => ''))}}
                        {{Form::text('ptaLname',null,array('','placeholder' => 'Last name...' , 'class' => 'form-control capital-letter','required' => ''))}}
                        {{Form::text('ptaMi',null,array('','placeholder' => 'Middle name...' , 'class' => 'form-control capital-letter','required' => ''))}}
                        </div>
                        <br>
                            </div>
                            <div class="col-md-5">
                        {{Form::label('position','Position:')}}
                        {{ Form::select('ptaPosition', ['President' => 'President','Vice-President' => 'Vice-President','Secretary'=> 'Secretary','Treasurer'=> 'Treasurer','Auditor'=> 'Auditor','Representative'=> 'Representative'], null, ['class' => 'form-control']) }}  
                        <br>
                        {{Form::label('slug','Slug:')}}
                        {{Form::text('slug',null,array('','placeholder' => 'slug...' , 'class' => 'form-control','required' => '','minlenght' =>'5','maxlenght' => '255'))}}
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
                                    <dd>{{ date('M j,Y h:ia',strtotime($pta->created_at))}}</dd>
                                   
                                </dl>
                                  <br>
                                    <dl class="dl-horizontal">
                                   <dt>Last Updated:</dt>
                                    <dd>{{ date('M j,Y h:ia',strtotime($pta->updated_at))}}</dd>
                                    
                                </dl>
          
                                <hr>
                                <div class="row">

                                   <div class="col-sm-6">
                                        {!! Html::LinkRoute('pta.show','Cancel',array($pta->id),array('class' =>'Btn btn-block Btn-yellow')) !!}
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