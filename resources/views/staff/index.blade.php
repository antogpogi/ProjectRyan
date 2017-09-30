@extends('main')

@section('title', '| Staff')

@section('stylesheets')
    {!!Html::style('css/ellipsi.css') !!}
@endsection
@section('box-content')

       <p class="lead">Staff Members</p>
    <hr class="guhit">
    <a class="Btn btn-labeled Btn-info" href="{{ route('staff.create')}}"><span class="btn-label"><i class="fa fa-plus"></i></span> Create new</a>
    <div class="row">
        <div class="box col-md-12">
            <div class="box-inner">
                <div class="box-header well" data-original-title="">
                    <h2>Staffs Table</h2>

                </div>
                <div class="box-content">
                    <div class="container">
                    <table class="table table-bordered table-hover">
                      <thead>
                <tr>
                    <th>Firstname</th>
                    <th>Lastname</th>
                    <th>Middlename</th>
                    <th>slug</th>
                    <th>Position</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>   
                      </thead>
                <tbody>
                
                    @foreach ($staff as $staf)
                    <tr>
                    <td>{{$staf->firstName}}</td>
                    <td>{{$staf->lastName}}</td>
                    <td>{{$staf->middleName}}</td>
                    <td>{{$staf->slug}}</td>
                    <td>{{$staf->position}}</td>
                    <td class="ellipsi">{{$staf->imageStaff}}</td>

                    
                    <td>
                        {!! Html::LinkRoute('staff.show','View',array($staf->id),array('class' =>'Btn Btn-white Btn-sm')) !!}
                        {!! Html::LinkRoute('staff.edit','Edit',array($staf->id),array('class' =>'Btn Btn-blue Btn-sm')) !!}
                    </td>
                </tr>
                @endforeach
                </tbody>
                    </table>
                    <div class="text-center">
                        {!!$staff->links()!!}

                    </div>
                   
                    </div>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    



@endsection