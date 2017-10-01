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
        <!--fac -->
        @include('dashboardtable._fac')
        <!--staff -->
        @include('dashboardtable._sta')
        <!--sec -->
        @include('dashboardtable._sec')
        <!-- pta -->
        @include('dashboardtable._pt')
        <!--tui -->
        @include('dashboardtable._tui')
        <!--dis -->
        @include('dashboardtable._dis')
        <!--eve -->
        @include('dashboardtable._eve')
        <!-- cour-->
        @include('dashboardtable._cour')
        <!--new -->
        @include('dashboardtable._new')
        <!-- ann-->
        @include('dashboardtable._an')
                <!-- last 2 -->
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