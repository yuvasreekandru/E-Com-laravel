@extends('master')
@section('content')
<div class="search-product">
    <div class="col-sm-10">
      <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Amount</th>
      <th scope="col">Tax</th>
      <th scope="col">Delivery Charges</th>
      <th scope="col">Total Amount</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>$ {{$total}}</td>
      <td>0</td>
      <td>$10</td>
      <td>${{$total + 10}}</td>
    </tr>
  </tbody>
</table>
<form action="orderplace" method="post">
    @csrf
  <div class="form-group">
    <textarea type="" name="address"placeholder="Your Address" class="form-control"></textarea>
  </div>
  <div class="form-group ">
    <label for="exampleInputPassword1">Payment Method</label><br><br>
    <input type="radio" value="cash" class="" name="payment"><span>Online Payment</span><br><br>
    <input type="radio" value="cash" class="" name="payment"><span>EMI Payment</span><br><br>
    <input type="radio" value="cash" class="" name="payment"><span>Payment on Delivery</span>

  </div>
  <button type="submit" class="btn btn-primary">order Now</button>
</form>


      </div>
</div>
@endsection