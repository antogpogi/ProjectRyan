@extends('main')

@section('title', '| Faculty')

@section('stylesheets')
    {!!Html::style('css/ellipsi.css') !!}
@endsection
@section('box-content')

       <p class="lead">Faculty Members</p>
    <hr class="guhit">
    <a class="Btn btn-labeled Btn-info" href="{{ route('faculty.create')}}"><span class="btn-label"><i class="fa fa-plus"></i></span> Create new</a>
    <div class="row">
        <div class="box col-md-12">
            <div class="box-inner">
                <div class="box-header well" data-original-title="">
                    <h2>Faculty Table</h2>

                </div>
                <div class="box-content">
                    <div class="container">
                    <table class="table table-bordered table-hover">
                      <thead>
                <tr>
                    <th>Firstname</th>
                    <th>Lastname</th>
                    <th>Middlename</th>
                    <th>Advisory Class</th>
                    <th>Action</th>
                </tr>   
                      </thead>
                <tbody>
                
                    @foreach ($faculty as $fac)
                    <tr>
                    <td>{{$fac->firstName}}</td>
                    <td>{{$fac->lastName}}</td>
                    <td>{{$fac->middleName}}</td>
                    <td>{{$fac->advisoryClass}}</td>

                    
                    <td>
                        {!! Html::LinkRoute('faculty.show','View',array($fac->id),array('class' =>'Btn Btn-white Btn-sm')) !!}
                        {!! Html::LinkRoute('faculty.edit','Edit',array($fac->id),array('class' =>'Btn Btn-blue Btn-sm')) !!}
                    </td>
                </tr>
                @endforeach
                </tbody>
                    </table>
                    <div class="text-center">
                        {!!$faculty->links()!!}

                    </div>
                   
                    </div>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    



@endsection