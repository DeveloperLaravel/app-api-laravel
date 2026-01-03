<header class="header-area header-sticky background-header">
<div class="container">
<nav class="main-nav">
<a href="{{ route('home') }}" class="logo">
<img src="{{ asset('images/1.png') }}" alt="Logo" style="width:48px ; height: 48px;">
</a>


<ul class="nav">
<li><a href="{{ route('home') }}" class="active">Home</a></li>
<li><a href="#">Our Shop</a></li>
<li><a href="#">Product Details</a></li>
<li><a href="{{ route('contact') }}">Contact</a></li>
<li><a href="#">Sign In</a></li>
</ul>


<a class="menu-trigger"><span>Menu</span></a>
</nav>
</div>
</header>