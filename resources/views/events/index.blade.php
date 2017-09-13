@extends('main')

@section('title', '| Events')

@section('stylesheets')
    {!!Html::style('css/ellipsi.css') !!}
@endsection
@section('box-content')

	<p class="lead">This is the Upcoming Events Post</p>
        <hr class="guhit">
	<a class="Btn btn-labeled Btn-info" href="{{ route('events.create')}}"><span class="btn-label"><i class="fa fa-plus"></i></span> Create new</a>
	<div class="row">
        <div class="box col-md-12">
            <div class="box-inner">
                <div class="box-header well" data-original-title="">
                    <h2>Upcoming Events</h2>

                </div>
                <div class="box-content">
                    <div class="container">
                    <table class="table table-bordered table-hover">
                      <thead>
				<tr>
					<th>Id_no.</th>
					<th>Title</th>
					<th>Date</th>
                    <th>Time Start</th>
                    <th>Time End</th>
					<th>Action</th>
				</tr>	
					  </thead>
     			<tbody>
				    @foreach($events as $event)
                    <tr>
                        <th>{{$event->id}}</th>
                        <td>{{$event->titleEvents}}</td>
                        <td>{{$event->dateEvents}}</td>
                        <td>{{$event->timeAmEvents}}</td>
                        <td>{{$event->timePmEvents}}</td>


                        <td>
                            {!! Html::LinkRoute('events.show','View',array($event->id),array('class' => 'Btn Btn-white Btn-sm'))!!}
                            {!! Html::LinkRoute('events.edit','Edit',array($event->id),array('class' => 'Btn Btn-blue Btn-sm'))!!}
                        </td>
                    </tr>   
                    @endforeach
                   
				</tbody>
                    </table>
                    <div class="text-center">
                        {!!$events->links()!!}

                    </div>
                   
                    </div>
                    </ul>
                </div>
            </div>
        </div>
    </div>
	



@endsection