<div class="section categories">
<div class="container">
<div class="section-heading text-center">
<h6>Categories</h6>
<h2>Top Categories</h2>
</div>


<div class="row">
@foreach(range(1,5) as $i)
<div class="col-lg col-sm-6">
<div class="item">
<h4>Action</h4>
<img src="{{ asset('images/categories-0'.$i.'.jpg') }}">
</div>
</div>
@endforeach
</div>
</div>
</div>