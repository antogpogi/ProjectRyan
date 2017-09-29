@extends('single')

@section('title','')
@section('stylesheets')
    {!!Html::style('css/ellipsi.css') !!}
    {!!Html::style('css/rosete.css')!!}
@endsection

@section('content')
<div class="container">
    <h2 class="text-left header-section">Faculty & Staff</h2>
    <hr class="bottom-line">
    <br>
    <div class='row'>

        <!--Boxes-->        
          @foreach($faculty as $fac)
          <div class="col-xs-12 col-sm-6 col-md-5">
            <div class="pm-staff-profile-container" >
              <div class="pm-staff-profile-image-wrapper text-center">
                <div class="pm-staff-profile-image">
                  <img src="{{ asset('images/' . $fac->imageFaculty)}}"  class="img-thumbnail img-circle" />
                </div>   
              </div>                                
              <div class="pm-staff-profile-details text-center">  
                <p class="pm-staff-profile-name">{{$fac->firstName}} <span>{{$fac->middleName}}.</span> {{$fac->lastName}}</p>
                <p class="pm-staff-profile-title">Lead Software Engineer</p>
                
                <p class="pm-staff-profile-bio">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec et placerat dui. In posuere metus et elit placerat tristique. Maecenas eu est in sem ullamcorper tincidunt. </p>
              </div> 
              <hr style="width:10%;" class="bottom-line">    
            </div>
          </div>
            @endforeach

        
        
        <!--Boxes-->

    </div>
</div>

@endsection

