@extends('master')
@section('content')
<div class="container">
   <div class="row">
       <div class="col-sm-6">
          <img class="detail-img" src="{{$product['gallery']}}" alt="">
       </div>
       <div class="col-sm-6">
         <a href="/">Go Back</a>
         <h3>{{$product['name']}}</h3>
         <h4>Price: {{$product['price']}}</h4>
         <h5>Description: {{$product['description']}}</h5>
         <h6>Category: {{$product['category']}}</h6>
         <br><br>
          <form action="/add_to_cart" method="post">
            @csrf
            <input type="hidden" name="product_id" value={{$product['id']}}>
            <button class="btn btn-primary">Add to Cart</button>
          </form>
         <br><br>
         <button class="btn btn-success">Buy Now</button>
   
       </div>
   </div>
</div>
@endsection