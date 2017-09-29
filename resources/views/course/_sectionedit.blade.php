{!!Form::model($section,['route' => ['section.update',$section->id],'method' => 'PUT','files' =>'true'])!!}
 <div class="col-md-7">
    <div class="form-group">
        {{Form::label('section','Section name:')}}
        {{Form::text('sectionName',null,array('','placeholder' => 'Section Name...' , 'class' => 'form-control capital-letter','required' => ''))}}
        <br>

        {{Form::label('startTime','Start time:')}}
        {{Form::time('timeAm',null,array('class'=>'form-control ','required' => '','style' =>'text-align:center; font-size:17px; '))}}
        <br>
        {{Form::label('EndTime','End time:')}}
        {{Form::time('timePm',null,array('class' => 'form-control','required' => '','style' => 'text-align:center; font-size:17px;', 'date' => 'G:i'))}}
        <br>
                               
        {{Form::hidden('title', $course->titleCourse) }}
        {{Form::submit('Submit',array('class' => 'Btn btn-lg Btn-blue ','style' => '', 'onclick' => 'viewSection'))}} 
        {!! Html::LinkRoute('course.show','Cancel',array($course->id),array('class' =>'Btn Btn-yellow')) !!}
    </div>
</div>
{!!Form::close()!!}
