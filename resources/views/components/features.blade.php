<div class="features">
<div class="container">
<div class="row">
@foreach([
['img'=>'featured-01.png','title'=>'Free Storage'],
['img'=>'featured-02.png','title'=>'User More'],
['img'=>'featured-03.png','title'=>'Reply Ready'],
['img'=>'featured-04.png','title'=>'Easy Layout'],
] as $item)
<div class="col-lg-3 col-md-6">
<div class="item">
<div class="image">
<img src="{{ asset('images/'.$item['img']) }}" style="max-width:44px">
</div>
<h4>{{ $item['title'] }}</h4>
</div>
</div>
@endforeach
</div>
</div>
</div>