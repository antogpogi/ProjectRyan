<!DOCTYPE html>
<html lang="en">
<style type="text/css">
  body{
    
      
  }

</style>
@include('frontPartials._header')

  <body>
    <!--Navigation bar-->
    @include('frontPartials._navbar')
    <!--navbar menu-->

    <!--/ Navigation bar-->

    <!--Banner-->
    @include('frontPartials._banner')
    
    <!--Feature-->
    <br>

    <section id ="feature" class="section-padding">
      <div class="container">
        <div class="row">
          <div style=" width:70%; border-right:1px solid #dadada; margin-right:5%;" class="col-md-8">
          <div class="header-section text-left">
            <h2>Announcement</h2>  
            <hr class="bottom-line">
             @foreach($announcements as $post)
            <h3 class="taytel capital-letter">{{$post->titleAnnouncement}}</h1>
            <h4 class="deyt">{{$post->dateAnnouncement}}</h4>
              <p class="break-word">{{substr($post->bodyAnnouncement, 0, 205)}} {{ strlen($post->bodyAnnouncement) > 105 ? "..." : ""}}</p>
                  <a class="Btn Btn-info" href="{{url('blog/'.$post->slug)}}">View more</a>
                    <hr style="width:100%; border:0.5px solid #dadada;" class="">

                @endforeach

                  </div>

            </div>

              <div class="col-md-3">

        <div class="row">
          <div class="header-section text-left">
            <h2>Upcoming Events</h2>

            <hr class="bottom-line">
          </div>
          @foreach($events as $event)
          <div class="">
           
            <div class="price-table">
    
              <div class="pricing-head">
              <h3><p class="capital-letter">{{$event->titleEvents}}</p></h4>
                <h5>{{date('h:ia',strtotime($event->timeAmEvents))}} - {{date('h:ia',strtotime($event->timePmEvents))}}</h2>

              </div>
        
                   <!-- Plean Detail -->
              <div class="price-in mart-15">
                <span  class="upcoming btn-bg green btn-block">{{$event->dateEvents }} </span> 
              </div>
                 
            </div>
            <br>
 @endforeach 
          </div>
          <br>

        </div>
              </div>
      
        
        </div>
      </div>
    </section>
   
    <section id ="courses" class="section-padding">
      <div class="container">
        <div class="row">
          <div class="header-section text-left">
            <h2>Course offered</h2>
           
            <hr class="bottom-line">
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          @foreach($courses as $course)
          <div class="col-md-6 col-sm-6 padleft-right">
            <figure style=""class="imghvr-fold-up">
              <img src="{{ asset('images/' . $course->imageCourse)}}" class="img-responsive">
              <figcaption style="">
                  <h3 class="capital-letter">{{$course->titleCourse}}</h3><br>
                  <p>{{$course->bodyCourse}}</p>
              </figcaption>
              <a href="admission"></a>
            </figure>
          </div>
          @endforeach

        </div>
        <br>
        <br>
        <hr class="bottom-line">
      </div>
    </section>

    <!--Faculity member-->

            {!! Html::script('css/front/js/jquery.min.js'); !!}
            {!! Html::script('css/front/js/jquery.easing.min.js'); !!}
            {!! Html::script('css/front/js/bootstrap.min.js'); !!}
            {!! Html::script('css/front/js/custom.js'); !!}
            {!! Html::script('css/front/js/navfix.js'); !!}
            {!! Html::script('css/front/js/fade.js'); !!}
            {!! Html::script('css/front/js/news.js')!!}
            {!! HTML::script('css/front/js/typeahead.min.js'); !!}
            {!! HTML::script('css/front/js/karusel.js'); !!}

 @include('frontPartials._vission')
<br>
    @include('frontPartials._footer')

    <!--/ Footer-->
  </body>
</html>