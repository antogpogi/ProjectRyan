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
    
    <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-2">
            <div class="offer offer-black">
                <div class="shape">
                    <div class="shape-text">
                        <span class="fa fa-users"></span>                            
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
                        <span class="fa fa-users"></span>                            
                    </div>
                </div>
                <div class="offer-content">
                    <center><h3 class="lead balak">Staff : <label class="label label-black">{{$staf}}</label></center>
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
                        <span class="fa fa-user-secret"></span>                            
                    </div>
                </div>
                <div class="offer-content">
                    <center><h3 class="lead balak">Admin : <label class="label label-black">{{$user}}</label></center>
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
                        <span class="fa fa-users"></span>                            
                    </div>
                </div>
                <div class="offer-content">
                    <center><h3 class="lead balak">
                    PTA : <label class="label label-black">{{$pta}}</label></center>
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
                        <span class="fa fa-money"></span>                            
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
                        <span class="fa fa-tags"></span>                            
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
                        <span class="fa fa-calendar-o"></span>                            
                    </div>
                </div>
                <div class="offer-content">
                    <center><h3 class="lead balak">
                    Events : <label class="label label-black">{{$event}}</label></center>
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
                        <span class="fa fa-graduation-cap"></span>                            
                    </div>
                </div>
                <div class="offer-content">
                    <center><h3 class="lead balak">
                    Courses Offered : <label class="label label-black">{{$course}}</label></center>
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
                        <span class="fa fa-newspaper-o"></span>                            
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
                        <span class="fa fa-bullhorn"></span>                            
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
<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well">
                <h2><i class="glyphicon glyphicon-info-sign"></i> Introduction</h2>

                <div class="box-icon">
                    <a href="#" class="btn btn-setting btn-round btn-default"><i
                            class="glyphicon glyphicon-cog"></i></a>
                    <a href="#" class="btn btn-minimize btn-round btn-default"><i
                            class="glyphicon glyphicon-chevron-up"></i></a>
                    <a href="#" class="btn btn-close btn-round btn-default"><i
                            class="glyphicon glyphicon-remove"></i></a>
                </div>
            </div>
            <div class="box-content row">
                <div class="col-lg-7 col-md-12">
                    <h1>Charisma <br>
                        <small>free, premium quality, responsive, multiple skin admin template.</small>
                    </h1>
                    <p>It's a live demo of the template. I have created Charisma to ease the repeat work I have to do on my
                        projects. Now I re-use Charisma as a base for my admin panel work and I am sharing it with you
                        :)</p>

                    <p><b>All pages in the menu are functional, take a look at all, please share this with your
                            followers.</b></p>

                    <p class="center-block download-buttons">
                        <a href="http://usman.it/free-responsive-admin-template/" class="btn btn-primary btn-lg"><i
                                class="glyphicon glyphicon-chevron-left glyphicon-white"></i> Back to article</a>
                        <a href="http://usman.it/free-responsive-admin-template/" class="btn btn-default btn-lg"><i
                                class="glyphicon glyphicon-download-alt"></i> Download Page</a>
                    </p>
                </div>
                <!-- Ads, you can remove these -->
                <div class="col-lg-5 col-md-12 hidden-xs center-text">
                    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                    <!-- Charisma Demo 4 -->
                    <ins class="adsbygoogle"
                         style="display:inline-block;width:336px;height:280px"
                         data-ad-client="ca-pub-5108790028230107"
                         data-ad-slot="9467443105"></ins>
                    <script>
                        (adsbygoogle = window.adsbygoogle || []).push({});
                    </script>
                </div>

                <div class="col-lg-5 col-md-12 visible-xs center-text">
                    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                    <!-- Charisma Demo 5 -->
                    <ins class="adsbygoogle"
                         style="display:inline-block;width:250px;height:250px"
                         data-ad-client="ca-pub-5108790028230107"
                         data-ad-slot="8957582309"></ins>
                    <script>
                        (adsbygoogle = window.adsbygoogle || []).push({});
                    </script>
                </div>
                <!-- Ads end -->

            </div>
        </div>
    </div>
</div>
    



@endsection