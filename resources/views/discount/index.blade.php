@extends('main')

@section('title', '| Discounts')

@section('stylesheets')
    {!!Html::style('css/ellipsi.css') !!}
@endsection
@section('box-content')

	<p class="lead">This is the Discounts Post</p>
        <hr class="guhit">
	<a class="Btn btn-labeled Btn-info" href="{{ route('discount.create')}}"><span class="btn-label"><i class="fa fa-plus"></i></span> Create new</a>
	<div class="row">
        <div class="box col-md-12">
            <div class="box-inner">
                <div class="box-header well" data-original-title="">
                    <h2>Discounts</h2>

                </div>
                <div class="box-content">
                    <table class="table table-bordered table-hover">
                      <thead>
				<tr>
					<th>Id_no.</th>
					<th>Title</th>
					<th>Percentage</th>
					<th>Action</th>
				</tr>	
					  </thead>
     			<tbody>
				    @foreach($discounts as $discount)
                    <tr>
                        <th>{{$discount->id}}</th>
                        <td>{{$discount->titleDiscount}}</td>
                        <td>{{$discount->percent}}</td>

                        <td>
                            {!! Html::LinkRoute('discount.show','View',array($discount->id),array('class' => 'Btn Btn-white Btn-sm'))!!}
                            {!! Html::LinkRoute('discount.edit','Edit',array($discount->id),array('class' => 'Btn Btn-blue Btn-sm'))!!}
                        </td>
                    </tr>   
                    @endforeach
                   
				</tbody>
                    </table>
                    <div class="text-center">
                        {!!$discounts->links()!!}

                    </div>
                   
                    </div>
                    </ul>
                </div>
        </div>
    </div>
	



@endsection