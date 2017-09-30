@extends('main')

@section('title','Create Courses Offered')

@section('stylesheets')

    {!! Html::style('css/parsley.css') !!}
    {!! Html::style('calendar/flick/jquery-ui.css')!!}
    {!! Html::style('calendar/flick/theme.css')!!}
    {!! Html::style('css/rosete.css')!!}

@endsection


@section('box-content')
	 <p class="lead">This is the Courses Offered Post</p>
    <hr class="guhit">
<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="fa fa-bullhorn"></i> Courses Offered</h2>

            </div>
            <div class="box-content">
                                <div class="row">
                    <div class="col-md-8">

                	{!!Form::open(array('route'=>'course.store','data-parsley-validate' =>'','files' =>'true'))!!}
                    <div class="form-group">
                            <div class="col-md-7">
                        {{Form::label('titles','Title:')}}
                        {{Form::text('titleCourse',null,array('','placeholder' => 'Title...' , 'class' => 'form-control capital-letter','required' => ''))}}
                        <br>
                        {{Form::label('slug','Slug:')}}
                        {{Form::text('slug',null,array('','placeholder' => 'example-example.' , 'class' => 'form-control','required' => '','minlenght' =>'5','maxlenght' => '255'))}}
                         <br>
                        {{Form::label('description','Description:')}}
                        {{Form::textarea('bodyCourse',null,array('placeholder' => 'Description...', 'class' => 'form-control','required' => ''))}}

                            </div>                       
                        </div>

                            <div class="form-group">
                                <div class="col-md-5">
                         <div>
                        {{Form::label('uploadImage','Upload Image:')}}
                        </div>                        
                        <div class="btn btn-default image-preview-input">
                            
                            <span class="fa fa-camera"></span> Choose File...
                            <div class="input-group image-preview"></div>
                            <input name="imageCourse" id="userImage" type="file" class="inputFile" onChange="showPreview(this);" />
                        </div>
                        <br>
                        <br>

                        <div class="bgColor">
                            <center><div id="targetOuter">
                                 <div  id="targetLayer"></div>
          

                            </div></center>

                        </div><!-- -->

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
                                        
                                        <a href="/course" class="Btn btn-block Btn-yellow">Cancel</a>
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
    {!! Html::script('js/image.validation.js')!!}
    {!! Html::script('js/upload.js')!!}
    {!! Html::script('js/numlength.js')!!}

@endsection


