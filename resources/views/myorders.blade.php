@extends('master')
@section('content')
<div class="search-product">
   <div class="col-sm-10">
       <div class="search-wrapper">
          <h3>My Orders</h3>
          @foreach($orders as $item)
            <div class=" row search-item cart-divider">
               <div class="col-sm-4">
               <a href="detail/{{$item->id}}">
               <img class="trending-img" src="{{$item->gallery}}" class="d-block w-100" alt="...">
               </a>
               </div>
               <div class="col-sm-4">
               <h4>Name: {{$item->name}}</h4> 
               <h6>Price: {{$item->price}}</h6>
               <h6>Dscription: {{$item->description}}</h6> 
               <h6>DeliveryStatus: {{$item->status}}</h6>
               <h6>paymentMethod: {{$item->payment_method}}</h6>
               <h6>PaymentStatus: {{$item->payment_status}}</h6>
               <h6>Address: {{$item->address}}</h6>

               </a>
               </div>
            </div>
          @endforeach
       </div>

   </div>

</div>
@endsection