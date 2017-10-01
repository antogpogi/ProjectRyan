<!DOCTYPE html>
<html lang="en">
@include('partials._header')

<body>
    @include('partials._navbar')
<div class="ch-container">
         
    <div class="row">       
        <!-- left menu starts -->
        
        <!--/span-->
        <!-- left menu ends -->
        <div id="content" class="col-lg-10 col-sm-10">
            <!-- content starts -->  
            @include('partials._message')
        @yield('box-content')
       
    </div><!--/#content.col-md-0-->
</div><!--/fluid-row-->

    <hr>

    @include('partials._footer')
@include('partials._javascript')
</div><!--/.fluid-container-->


<!-- external javascript -->



</body>
</html>
