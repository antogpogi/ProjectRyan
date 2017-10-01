@extends('main')

@section('title', '| Faculty')

@section('stylesheets')
    {!!Html::style('css/ellipsi.css') !!}
    {!!Html::style('css/rosete.css') !!}
@endsection
@section('box-content')

       <p class="lead"><i class="fa fa-dashboard fa-x5"></i> Dashboard</p>
    <hr class="guhit">
   <div class="container">
    <div class="col-md-12">
    <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-2">
            <div class="offer offer-black">
                <div class="shape">
                    <div class="shape-text">
                 
                    </div>
                </div>
                <div class="offer-content">
                    <center><h3 class="lead balak">Faculty : <label class="label label-black">{{$fac}}</label><center>
                    </h3>
                    <p>

                    </p>
                </div>
            </div>
        </div>

                                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-2">
            <div class="offer offer-black">
                <div class="shape">
                    <div class="shape-text">
                         
                    </div>
                </div>
                <div class="offer-content">
                    <center><h3 class="lead balak">Staff : <label class="label label-black">{{$sta}}</label></center>
                    </h3>
                    <p>

                    </p>
                </div>
            </div>
        </div>

                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-2">
            <div class="offer offer-black">
                <div class="shape">
                    <div class="shape-text">
                 
                    </div>
                </div>
                <div class="offer-content">
                    <center><h3 class="lead balak">Sections : <label class="label label-black">{{$sec}}</label></center>
                    </h3>
                    <p>

                    </p>
                </div>
            </div>
        </div>

                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
            <div class="offer offer-black">
                <div class="shape">
                    <div class="shape-text">
                     
                    </div>
                </div>
                <div class="offer-content">
                    <center><h3 class="lead balak">
                    PTA : <label class="label label-black">{{$pt}}</label></center>
                    </h3>
                    <p>

                    </p>
                </div>
            </div>
        </div>

                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
            <div class="offer offer-black">
                <div class="shape">
                    <div class="shape-text">
                      
                    </div>
                </div>
                <div class="offer-content">
                    <center><h3 class="lead balak">
                    Tuitions : <label class="label label-black">{{$tui}}</label></center>
                    </h3>
                    <p>

                    </p>
                </div>
            </div>
        </div>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
            <div class="offer offer-black">
                <div class="shape">
                    <div class="shape-text">
                         
                    </div>
                </div>
                <div class="offer-content">
                    <center><h3 class="lead balak">
                    Discounts : <label class="label label-black">{{$dis}}</label></center>
                    </h3>
                    <p>

                    </p>
                </div>
            </div>
        </div>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
            <div class="offer offer-black">
                <div class="shape">
                    <div class="shape-text">
                  
                    </div>
                </div>
                <div class="offer-content">
                    <center><h3 class="lead balak">
                    Events : <label class="label label-black">{{$eve}}</label></center>
                    </h3>
                    <p>

                    </p>
                </div>
            </div>
        </div>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-2">
            <div class="offer offer-black">
                <div class="shape">
                    <div class="shape-text">
                      
                    </div>
                </div>
                <div class="offer-content">
                    <center><h3 class="lead balak">
                    Courses Offered : <label class="label label-black">{{$cour}}</label></center>
                    </h3>
                    <p>

                    </p>
                </div>
            </div>
        </div>
                <!-- last 2 -->
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-2">
            <div class="offer offer-black">
                <div class="shape">
                    <div class="shape-text">
                    
                    </div>
                </div>
                <div class="offer-content">
                    <center><h3 class="lead balak">
                    Latest News : <label class="label label-black">{{$new}}</label></center>
                    </h3>
                    <p>

                    </p>
                </div>
            </div>
        </div>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-2">
            <div class="offer offer-black">
                <div class="shape">
                    <div class="shape-text">
                  
                    </div>
                </div>
                <div class="offer-content">
                     <center><h3 class="lead balak">
                    Announcements : <label class="label label-black">{{$ann}}</label></center>
                    </h3>
                    <p>

                    </p>
                </div>
            </div>
        </div>

        </div>
</div>

<br>
<div class="col-md-12">
<!--Course Offered-->
<div class="row">
<section id="kurs">
    @include('dashboardtable._course')
        <!-- col-md-5 -->
    @include('dashboardtable._discounts')
</section>
</div> 

<!--Events -->
<section id="ibint">
<div class="row">
    @include('dashboardtable._events')
    <!-- col-md-5 -->
    @include('dashboardtable._sections')
</div>
</section>

<!--Tutions -->
<section id="twesyun">
<div class="row">
    @include('dashboardtable._tuition')
    <!-- col-md-5-->
    @include('dashboardtable._ann')
</div>
</section>

<!-- NEWS -->
<section id="nyus">
<div class="row">
    @include('dashboardtable._news')
</div>
</section>

<section id="ann">
<div class="row">

</div>
</section>


<section id="ptas">
<div class="row">
    @include('dashboardtable._pta')
</div>
</section>



<section id="pakulti">
<div class="row">
    @include('dashboardtable._faculty')
</div>
</section>

<section id="istap">
<div class="row">
    @include('dashboardtable._staff')
</div>
</section>

<!-- end ng table -->
</div>
</div>


@endsection