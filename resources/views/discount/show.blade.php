@extends('main')

@section('title','| Edit Discount')

@section('stylesheets')

 	{!!Html::style('css/ellipsi.css') !!}
    {!!Html::style('css/rosete.css')!!}

@endsection

@section('box-content')
    <p class="lead">This is the Discount Post</p>
        <hr class="guhit">
<div class="row">
	<div class="container-fluid">
		<ul class="breadcrumb breadcrumb-size">
			<li><a href="{{route('discount.create')}}">Add new Discount</a></li>
			<li><a href="{{route('discount.index')}}">View All</a></li>
		</ul>
	</div>
</div>

<div class="row">
        <div class="box col-md-12">
            <div class="box-inner">
                <div class="box-header well" data-original-title="">
                    <h2>Discount</h2>

                </div>
                <div class="box-content">
                    <div class="row">
                        <div class="col-md-8">

                            <h1 class="h1-tag capital-letter">{{$discount->titleDiscount}}&nbsp; - &nbsp;%{{$discount->percent}}</h1>
                            <br>
                              	                     
                        </div>
                        <div class="col-md-4">
                            <div class="well">
                                <dl class="dl-horizontal">
                                    <dt>Create At:</dt>
                                    <dd>{{ date('M j,Y g:ia',strtotime($discount->created_at))}}</dd>
                                </dl>
                                    <dl class="dl-horizontal">
                                    <dt>Last Updated:</dt>
                                    <dd>{{ date('M j,Y g:ia',strtotime($discount->updated_at))}}</dd>
                                </dl>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-6">
                                        {!! Html::LinkRoute('discount.edit','Edit',array($discount->id),array('class' =>'Btn Btn-info btn-block')) !!}
                                    </div>

                                    <div class="col-sm-6">
                                        {!!Form::open(['route' => ['discount.destroy',$discount->id],'method' => 'DELETE','onsubmit' => "return confirm('Are you sure you want to delete?')"])!!}

                                        {!! Form::submit('Delete',[ 'class' => 'Btn btn-block Btn-red'])!!}

                                        {!! Form::close()!!}

                                       
                                    </div>
                                    <div class="col-md-12">
                                        <br>
                                            <a href="/discount" class="Btn btn-block Btn-white"><i class="fa fa-arrow-left"> Back</i></a>
                                    </div>
                                </div>

                            </div>

                        </div>

                    </div>
                   
                </div>
            </div>
        </div>
    </div><!--/span-->

@endsection