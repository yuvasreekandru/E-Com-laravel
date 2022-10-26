@extends('master')
@section('content')
<div class="search-product">
<div class="row search-row">
   <div class="col-sm-4">
     <a href="#">Filter</a>
   </div>
   <div class="col-sm-4">
       <div class="search-wrapper">
          <h3>Result for Products</h3>
          @foreach($products as $item)
            <div class="search-item">
               <a href="detail/{{$item['id']}}">
               <img class="trending-img" src="{{$item['gallery']}}" class="d-block w-100" alt="...">
               <h4>{{$item['name']}}</h4> 
               <h5>{{$item['price']}}</h5>
               <h6>{{$item['description']}}</h6> 
               </a>
            </div>
          @endforeach
       </div>
   </div>
   </div>
</div>
@endsection