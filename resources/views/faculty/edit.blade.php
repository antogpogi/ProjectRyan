@extends('main')

@section('title','Update Faculty Member')

@section('stylesheets')

    {!! Html::style('css/parsley.css') !!}
    {!! Html::style('calendar/flick/jquery-ui.css')!!}
    {!! Html::style('calendar/flick/theme.css')!!}
    {!! Html::style('css/rosete.css')!!}

@endsection


@section('box-content')
     <p class="lead">This is the Faculty Member Details</p>
    <hr class="guhit">
<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="fa fa-bullhorn"></i> Faculty Member</h2>

            </div>
            <div class="box-content">
                <div class="row">
                    <div class="col-md-8">

                    {!!Form::model($faculty,['route' => ['faculty.update',$faculty->id],'method' => 'PUT','files' =>'true'])!!}
                    <div class="form-group">
                            <div class="col-md-5">
                        {{Form::label('Firstname','First Name:')}}
                        {{Form::text('firstName',null,array('','placeholder' => 'First name...' , 'class' => 'form-control capital-letter','required' => ''))}}
                        <br>
                        {{Form::label('lastName','Last Name:')}}
                        {{Form::text('lastName',null,array('','placeholder' => 'Last name...' , 'class' => 'form-control capital-letter','required' => ''))}}
                        <br>  
                        {{Form::label('middleName','Middle Name:')}}
                        {{Form::text('middleName',null,array('','placeholder' => 'Middle name...' , 'class' => 'form-control all-caps','id' =>'ms_num','maxlenght' =>'2'))}}
                        
                            </div>                       
                        </div>

                        <div class="form-group">
                        <div class="col-md-6">
                        {{Form::label('level','Level:')}}
                        {{Form::text('level',null,array('','placeholder' => 'level...' , 'class' => 'form-control capital-letter','required' => ''))}}
                        <br>
                        {{Form::label('adClass','Advisory Class:')}}
                        <select class="form-control capital-letter" name="advisoryClass" id="advisoryClass">
                            @foreach($sections as $section)
                            <option value="{{$section->sectionName}}">{{$section->sectionName}}</option>
                            @endforeach
                        </select>
                        <br>
                        <div>
                        {{Form::label('uploadImage','Upload Image:')}}
                        </div> 
                        <div class="btn btn-default image-preview-input">
                            
                            <span class="fa fa-camera"></span> Choose File...
                            <div class="input-group image-preview"></div>
                            <input name="imageFaculty" id="userImage" type="file" class="inputFile" onChange="showPreview(this);" />
                        </div>
                        <br>
                        <br>

                        <div class="bgColor">
                            <center><div id="targetOuter">
                                 <div  id="targetLayer"></div>
          

                                    </div></center>     
                        </div> <!--end ng display picture -->

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
                                    <dd>{{ date('M j,Y h:ia',strtotime($faculty->created_at))}}</dd>
                                   
                                </dl>
                                  <br>
                                    <dl class="dl-horizontal">
                                   <dt>Last Updated:</dt>
                                    <dd>{{ date('M j,Y h:ia',strtotime($faculty->updated_at))}}</dd>
                                    
                                </dl>
          
                                <hr>
                                <div class="row">

                                   <div class="col-sm-6">
                                        {!! Html::LinkRoute('faculty.show','Cancel',array($faculty->id),array('class' =>'Btn btn-block Btn-yellow')) !!}
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
    {!! Html::script('js/image.validation.js')!!}
    {!! Html::script('js/upload.js')!!}
    {!! Html::script('js/numlength.js')!!}
    {!! Html::script('calendar/jquery-1.12.4.js')!!}
    {!! Html::script('calendar/jquery-ui.js')!!}
    


@endsection


