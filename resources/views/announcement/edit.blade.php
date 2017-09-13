@extends('main')

@section('title','|Update Announcement')

@section('stylesheets')

    {!! Html::style('/css/parsley.css') !!}
    {!! Html::style('calendar/flick/jquery-ui.css')!!}
    {!! Html::style('calendar/flick/theme.css')!!}
    {!! Html::style('css/rosete.css')!!}


@endsection



@section('box-content')
<div class="row">
        <p class="lead">This is the Announcement Post</p>
    <hr class="guhit">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="fa fa-bullhorn"></i> Anouncement</h2>
            </div>
            <div class="box-content">
                    <div class="row">
                    <div class="col-md-8">
                        {!!Form::model($post,['route' => ['announcement.update',$post->id],'method' => 'PUT'])!!}

                    
                        <div class="form-group">
                            <div class="col-md-5">
                        {{Form::label('titles','Title:')}}
                        {{Form::text('titleAnnouncement',null,array('','placeholder' => 'Title...' , 'class' => 'form-control','required' => ''))}}

                        {{Form::label('date','Date:')}}
                        {{Form::text('dateAnnouncement',null,array('id' => 'datepicker','placeholder' => 'Date...','class' => 'form-control','required' => '','readonly' => 'true'))}}

                        {{Form::label('slug','Slug:')}}
                        {{Form::text('slug',null,array('placeholder' => 'Date...','class' => 'form-control','required' => ''))}}
                            </div>
                        
                        </div>
                            <div class="form-group">
                                <div class="col-md-7">
                        {{Form::label('description','Description:')}}
                        {{Form::textarea('bodyAnnouncement',null,array('placeholder' => 'Description...', 'class' => 'form-control','required' => ''))}}
                                </div>
                            </div>
                        <br>
                    </div>
                    <br>
                        <div class="col-md-4">
                            <div class="well">
                                <dl class="dl-horizontal">
                                    <dt>Create At:</dt>
                                    <dd>{{ date('M j,Y h:ia',strtotime($post->created_at))}}</dd>
                                </dl>
                                    <dl class="dl-horizontal">
                                    <dt>Last Updated:</dt>
                                    <dd>{{ date('M j,Y h:ia',strtotime($post->updated_at))}}</dd>
                                </dl>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-6">
                                        {!! Html::LinkRoute('announcement.show','Cancel',array($post->id),array('class' =>'Btn btn-block Btn-yellow')) !!}
                                    </div>

                                    <div class="col-sm-6">
                                        {{Form::submit('Save Changes',['class' =>'Btn btn-block Btn-blue'])}}

                                    </div>
                                </div>

                            </div>

                        </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>

        {!!Form::close()!!}

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