<!DOCTYPE html>
<html lang="en">
@include('frontPartials._header')

  <body>


    <!--Navigation bar-->
    @include('frontPartials._navbar')
    <div class="container">
      <div class="row">
        <div class="col-md-12">          
            <br>
              @yield('content')
                <br>
                 <br>
                  <br>
                   <br> <br>
                    <br>
                     <br>
                      <br>
                       <br> <br>
                       
        </div>  


      </div>

    </div>

            {!! Html::script('css/front/js/jquery.min.js'); !!}
            {!! Html::script('css/front/js/jquery.easing.min.js'); !!}
            {!! Html::script('css/front/js/bootstrap.min.js'); !!}
            {!! Html::script('css/front/js/custom.js'); !!}
            {!! Html::script('css/front/js/navfix.js'); !!}
            {!! Html::script('css/front/js/fade.js'); !!}
            {!! Html::script('css/front/js/news.js')!!}
            {!! HTML::script('css/front/js/typeahead.min.js'); !!}
            {!! HTML::script('css/front/js/karusel.js'); !!}

<br>
    @include('frontPartials._footer')

    <!--/ Footer-->
  </body>
</html>