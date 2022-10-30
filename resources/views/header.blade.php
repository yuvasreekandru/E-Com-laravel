<?php
use App\Http\Controllers\ProductController;
$total = 0;
if(Session::has('user')){
 $total = ProductController::cartItem();
}
?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="myorders">Orders</a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link disabled">Disabled</a>
      </li>

      <form action ="search" class="form-inline">
        <div class="form-group mx-sm-3">
          <input type="text" name="query" class="form-control search-box"  placeholder="Search">
        </div>
        <button type="submit" class="btn btn-primary">Search</button>
      </form>
    </ul>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item ">
          <a href="cartlist" class="nav-link">Cart({{$total}})</a>
        </li>
        @if(Session::has('user'))
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
             {{Session::get('user')['name']}}
          </a>
          <div class="dropdown-menu">
             <a class="dropdown-item" href="/logout">Logout</a>
          </div>
        </li>
        @else
        <li class="nav-item ">
          <a href="/login" class="nav-link">Login</a>
        </li>
        <li class="nav-item ">
          <a href="/register" class="nav-link">Register</a>
        </li>
        @endif
      </ul>
    
  </div>
</nav>