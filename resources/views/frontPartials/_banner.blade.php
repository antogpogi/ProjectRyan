<div style="background-color:#dfe0e0;" class="banner">
  <center><div style="width:80%;">

<div id="myCarousel" class="carousel slide">
<div class="carousel-inner">
	@foreach($lnew as $lnew)
<article class="item {{ $loop->first ? ' active' : '' }}">

<img src="{{ asset('images/' . $lnew->imageNews)}}">
<div class="carousel-caption">
<h3 class="head-line capital-letter">{{$lnew->titleNews}}</h3>
<p>{{substr($lnew->bodyNews, 0, 100)}} {{ strlen($lnew->bodyNews) > 55 ? "..." : ""}}</p>
<p><a class="Btn Btn-info" href="{{url('slug-news/'.$lnew->slug)}}">Read More</a></p>
</div>

</article>

@endforeach
</div>
<!-- Indicators -->
<ol class="carousel-indicators">
	@foreach($lnew as $lnew)
<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
	@endforeach
</ol>
<!-- Controls -->
<div class="carousel-controls">
<a class="carousel-control left" href="#myCarousel" data-slide="prev">
<span class="fa fa-arrow-left"></span>

</a>
<a class="carousel-control right" href="#myCarousel" data-slide="next">
<span class="fa fa-arrow-right"></span>

</a>
</div>
</div>


        </div></center></div>