<div class="section trending">
<div class="container">
<div class="section-heading d-flex justify-content-between">
<div>
<h6>Trending</h6>
<h2>Trending Games</h2>
</div>
<a href="#" class="main-button">View All</a>
</div>


<div class="row">
@for($i=1;$i<=4;$i++)
<div class="col-lg-3 col-md-6">
<div class="item">
<div class="thumb">
<img src="{{ asset('images/trending-0'.$i.'.jpg') }}">
<span class="price">$20</span>
</div>
<div class="down-content">
<span class="category">Action</span>
<h4>Assassin Creed</h4>
<a href="#"><i class="fa fa-shopping-bag"></i></a>
</div>
</div>
</div>
@endfor
</div>
</div>
</div>