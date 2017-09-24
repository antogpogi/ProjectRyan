{!!Form::model($section,['route' => ['section.update',$section->id],'method' => 'PUT','files' =>'true'])!!}

	{{Form::label('name','Name:')}}
    {{Form::text('name',null,array('','placeholder' => 'Title...' , 'class' => 'form-control capital-letter','required' => ''))}}
    {{Form::label('description','Description:')}}
    {{Form::textarea('description',null,array('','placeholder' => 'Description...' , 'class' => 'form-control capital-letter','required' => ''))}}
    <br>
 	{{Form::submit('Submit',array('class' => 'Btn btn-lg Btn-blue ','style' => ''))}} 

{!!Form::close()!!}