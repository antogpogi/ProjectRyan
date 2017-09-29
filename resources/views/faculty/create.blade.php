@extends('main')

@section('title','Create Faculty')

@section('stylesheets')

    {!! Html::style('css/parsley.css') !!}
    {!! Html::style('calendar/flick/jquery-ui.css')!!}
    {!! Html::style('calendar/flick/theme.css')!!}
    {!! Html::style('css/rosete.css')!!}

@endsection


@section('box-content')
	 <p class="lead">This is the Faculty Post</p>
    <hr class="guhit">
<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="fa fa-bullhorn"></i> Faculty</h2>

            </div>
            <div class="box-content">
                                <div class="row">
                    <div class="col-md-8">

                	{!!Form::open(array('route'=>'faculty.store','data-parsley-validate' =>'','files' =>'true'))!!}
                    <div class="form-group">
                            <div class="col-md-5">
                        {{Form::label('Firstname','First Name:')}}
                        {{Form::text('firstName',null,array('','placeholder' => 'First name...' , 'class' => 'form-control capital-letter','required' => ''))}}
                        <br>
                        {{Form::label('lastName','Last Name:')}}
                        {{Form::text('lastName',null,array('','placeholder' => 'Last name...' , 'class' => 'form-control capital-letter','required' => ''))}}
                        <br>  
                        {{Form::label('middleName','Middle Name:')}}
                        {{Form::text('middleName',null,array('','placeholder' => 'Middle name...' , 'class' => 'form-control capital-letter'))}}
                        <br>
                        {{Form::label('slug','Slug:')}}
                        {{Form::text('slug',null,array('','placeholder' => 'example-example.' , 'class' => 'form-control','required' => '','minlenght' =>'5','maxlenght' => '255'))}}
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
                        {{Form::label('adClass','Advisory Class:')}}
                        </div>                        
                        <div class="btn btn-default image-preview-input">
                            
                            <span class="fa fa-folder-open"></span> Choose File...
                            <div class="input-group image-preview"></div>
                            <input name="imageFaculty" id="userImage" type="file" class="inputFile" onChange="showPreview(this);" />
                        </div>
                        <br>

    <div class="bgColor">
        <div id="targetOuter">
            <div id="targetLayer"></div>
            <img src="photo.png"  class="icon-choose-image" />
            <div class="icon-choose-image" >
            
            </div>
        </div>
        <div>
           
        </div>

        </div>

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
                                        
                                        <a href="/faculty" class="Btn btn-block Btn-yellow">Cancel</a>
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
function showPreview(objFileInput) {
    if (objFileInput.files[0]) {
        var fileReader = new FileReader();
        fileReader.onload = function (e) {
            $('#blah').attr('src', e.target.result);
            $("#targetLayer").html('<img src="'+e.target.result+'" width="200px" height="200px" class="upload-preview" />');
            $("#targetLayer").css('opacity','0.9');
            $(".icon-choose-image").css('opacity','0.9');
        }
        fileReader.readAsDataURL(objFileInput.files[0]);


            var oFile = document.getElementById("userImage").files[0]; // <input type="file" id="fileUpload" accept=".jpg,.png,.gif,.jpeg"/>

            if (oFile.size > 1500000) // 2 mb for bytes.
            {
                alert("Too large Image. Only image smaller than 2MB can be uploaded.");
                return;
            }
    }
}
</script>

<script type="text/javascript">
$(document).ready(function (e) {
    $("#uploadForm").on('submit',(function(e) {
        e.preventDefault();
        $.ajax({
            url: "upload.php",
            type: "POST",
            data:  new FormData(this),
            beforeSend: function(){$("#body-overlay").show();},
            contentType: false,
            processData:false,
            success: function(data)
            {
            $("#targetLayer").html(data);
            $("#targetLayer").css('opacity','1');
            setInterval(function() {$("#body-overlay").hide(); },500);
            },
            error: function() 
            {
            }           
       });
    }));
});
</script>


@endsection


