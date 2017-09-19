{!!Form::open(array('route'=>'section.store','data-parsley-validate' =>'','files' =>'true'))!!}
    <div class="form-group">
        {{Form::label('name','Name:')}}
        {{Form::text('name',null,array('','placeholder' => 'Section Name...' , 'class' => 'form-control capital-letter','required' => ''))}}
        <br>
        {{Form::label('description','Description:')}}
        {{Form::textarea('description',null,array('','placeholder' => 'Description...' , 'class' => 'form-control capital-letter','required' => ''))}}
        <br>
        {{Form::hidden('id', $course->id) }}
         {{Form::submit('Submit',array('class' => 'Btn btn-lg Btn-blue ','style' => '', 'onclick' => 'viewSection'))}} 
    </div>
{!!Form::close()!!}