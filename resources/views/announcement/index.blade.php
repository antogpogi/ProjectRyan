@extends('main')

@section('title', '| Announcement')

@section('stylesheets')
    {!!Html::style('css/ellipsi.css') !!}
@endsection
@section('box-content')

	   <p class="lead">This is the Announcement Post</p>
    <hr class="guhit">
	<a class="Btn btn-labeled Btn-info" href="{{ route('announcement.create')}}"><span class="btn-label"><i class="fa fa-plus"></i></span> Create new</a>
	<div class="row">
        <div class="box col-md-12">
            <div class="box-inner">
                <div class="box-header well" data-original-title="">
                    <h2>Announcement Table</h2>

                </div>
                <div class="box-content">
                    <div class="container">
                    <table class="table table-bordered table-hover">
                      <thead style="">
				<tr>
					<th>Id_no.</th>
					<th>Title</th>
					<th>Date</th>
                    <th>slug</th>
					<th>Description</th>
					<th>Action</th>
				</tr>	
					  </thead>
     			<tbody>
				
                    @foreach ($posts as $post)
                    <tr>
					<th>{{$post->id}}</th>
					<td>{{$post->titleAnnouncement}}</td>
					<td>{{$post->dateAnnouncement}}</td>
                    <td>{{$post->slug}}</td>
					<td class="ellipsi">{{$post->bodyAnnouncement}}</td>

                    
					<td>
                        {!! Html::LinkRoute('announcement.show','View',array($post->id),array('class' =>'Btn Btn-white Btn-sm')) !!}
                        {!! Html::LinkRoute('announcement.edit','Edit',array($post->id),array('class' =>'Btn Btn-blue Btn-sm')) !!}
                    </td>
				</tr>
                @endforeach
				</tbody>
                    </table>
                    <div class="text-center">
                        {!!$posts->links()!!}

                    </div>
                   
                    </div>
                    </ul>
                </div>
            </div>
        </div>
    </div>
	



@endsection