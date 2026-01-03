<div class="section most-played">
<div class="container">
<div class="section-heading d-flex justify-content-between">
<div>
<h6>TOP GAMES</h6>
<h2>Most Played</h2>
</div>
<a href="#" class="main-button">View All</a>
</div>


<div class="row">
@for($i=1;$i<=6;$i++)
<div class="col-lg-2 col-md-6 col-sm-6">
<div class="item">
<img src="{{ asset('images/top-game-0'.$i.'.jpg') }}">
<div class="down-content">
<span class="category">Adventure</span>
<h4>Assassin Creed</h4>
<a href="#">Explore</a>
</div>
</div>
</div>
@endfor
</div>
</div>
</div>