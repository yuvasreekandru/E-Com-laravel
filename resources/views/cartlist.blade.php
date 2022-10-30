@extends('master')
@section('content')
<div class="search-product">
   <div class="col-sm-10">
       <div class="search-wrapper">
          <h3>Result for Products</h3>
          <a class="btn btn-success"href="ordernow">Order Now</a><br><br>
          @foreach($products as $item)
            <div class=" row search-item cart-divider">
               <div class="col-sm-4">
               <a href="detail/{{$item->id}}">
               <img class="trending-img" src="{{$item->gallery}}" class="d-block w-100" alt="...">
               </a>
               </div>
               <div class="col-sm-4">
               <h4>{{$item->name}}</h4> 
               <h5>{{$item->price}}</h5>
               <h6>{{$item->description}}</h6> 
               </a>
               </div>
               <div class="col-sm-4">
                <a href="removecart/{{$item->cart_id}}">
                <button class="btn btn-warning">Remove</button>
                </a>
               </div>
            </div>
          @endforeach
       </div>
       <a class="btn btn-success"href="ordernow">Order Now</a><br><br>

   </div>

</div>
@endsection