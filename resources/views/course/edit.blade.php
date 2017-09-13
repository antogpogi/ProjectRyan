@extends('main')

@section('title','Update Course')

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

                	{!!Form::model($course,['route' => ['course.update',$course->id],'method' => 'PUT','files' =>'true'])!!}
                    <div class="form-group">
                            <div class="col-md-5">
                        {{Form::label('titles','Title:')}}
                        {{Form::text('titleCourse',null,array('','placeholder' => 'Title...' , 'class' => 'form-control capital-letter','required' => ''))}}
                        <br>
                        {{Form::label('slug','Slug:')}}
                        {{Form::text('slug',null,array('','placeholder' => 'example-example.' , 'class' => 'form-control','required' => '','minlenght' =>'5','maxlenght' => '255'))}}
                         <br>
                        {{Form::label('imageCourse','Update Image:')}}
                        {{Form::file('imageCourse')}}

                            </div>                       
                        </div>

                            <div class="form-group">
                                <div class="col-md-7">
                        {{Form::label('description','Description:')}}
                        {{Form::textarea('bodyCourse',null,array('placeholder' => 'Description...', 'class' => 'form-control','required' => ''))}}
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
                                   <dt>Create At:</dt>
                                    <dd>{{ date('M j,Y h:ia',strtotime($course->created_at))}}</dd>
                                   
                                </dl>
                                  <br>
                                    <dl class="dl-horizontal">
                                   <dt>Last Updated:</dt>
                                    <dd>{{ date('M j,Y h:ia',strtotime($course->updated_at))}}</dd>
                                    
                                </dl>
          
                                <hr>
                                <div class="row">

                                   <div class="col-sm-6">
                                        {!! Html::LinkRoute('course.show','Cancel',array($course->id),array('class' =>'Btn btn-block Btn-yellow')) !!}
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
    

<script type="text/javascript">
  $(function() {
    $( "#datepicker" ).datepicker({
        dateFormat: 'MM d,yy'
    });
  });
  </script>

@endsection


