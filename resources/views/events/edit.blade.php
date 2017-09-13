@extends('main')

@section('title','| Create Events')

@section('stylesheets')

    {!! Html::style('css/parsley.css') !!}
    {!! Html::style('calendar/flick/jquery-ui.css')!!}
    {!! Html::style('calendar/flick/theme.css')!!}
    {!! Html::style('css/rosete.css')!!}


@endsection

@section('box-content')
	<p class="lead">This is the Upcoming Events Post</p>
        <hr class="guhit">
<div class="row">
	<div class="box col-md-12">
		<div class="box-inner">
			<div class="box-header well">
				<h2><i class="fa fa-thumb-tack"></i>Upcoming Events</h2>
			</div>
			<div class="box-content">
				<div class="row">
					<div class="col-md-8">

						{!! Form::model($event,['route' => ['events.update',$event->id],'method' => 'PUT'])!!}
						<div class="form-group">
							<div class="col-md-5">
								{{Form::label('titles','Title:')}}
								{{Form::text('titleEvents',null,array('placeholder' => 'Title...','class' => 'form-control capital-letter','required' => ''))}}
								<br>
								{{Form::label('date','Date:')}}
                        		{{Form::text('dateEvents',null,array('id' => 'datepicker','placeholder' => 'Date...','class' => 'form-control','required' => '','readonly' => 'true'))}}
                        		<br>
								{{Form::label('slug','slug:')}}
								{{Form::text('slug',null,array('placeholder' => 'example-example...','class' => 'form-control','required' => ''))}}							
								<br>
							</div>
							<div class="form-group">
								<div class="col-md-7">
								{{Form::label('startTime','Start time:')}}
								{{Form::time('timeAmEvents',null,array('class'=>'form-control ','required' => '','style' =>'text-align:center; font-size:17px; '))}}
								<br>
								{{Form::label('EndTime','End time:')}}
								{{Form::time('timePmEvents',null,array('class' => 'form-control','required' => '','style' => 'text-align:center; font-size:17px;', 'date' => 'G:i'))}}
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
                                        
                                        <a href="/events" class="Btn btn-block Btn-yellow">Cancel</a>
                                    </div>
                                    <div class="col-sm-6">
                                         {{Form::submit('Save Changes',array('class' => 'Btn btn-block Btn-blue ','style' => ''))}}
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
    

<script type="text/javascript">
  $(function() {
    $( "#datepicker" ).datepicker({
        dateFormat: 'MM d,yy'
    });
  });
  </script>



@endsection