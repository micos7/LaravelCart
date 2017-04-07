@extends('layouts.master')

@section('title')
Laravel shopping cart
@endsection
@section('content')
@if(Session::has('cart'))
<div class="row">
  <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
    <ul class="list-group">
      @foreach($products as $product)
      <li class="list-group-item">
        <span class="badge"> {{ $product['qty'] }}</span>
        <strong>{{ $product['item']['title'] }}</strong>
         <span class="label label-success">{{ $product['price'] }}</span>
        <div class="btn-group">
          <div class="btn-group">
            <button class="btn btn-primary btn-xs dropdown-toggle" type="button" data-toggle="dropdown">Action <span class="caret"></span></button>
            <ul class="dropdown-menu">
              <li><a href="{{ route('product.ReduceByOne',['id' => $product['item']['id']]) }}">Reduce by 1</a></li>
              <li><a href="{{ route('product.remove',['id' => $product['item']['id']]) }}">Reduce all</a></li>
            </ul>
          </div>
        </div>
      </li>
      @endforeach
    </ul>
  </div>
</div>
<div class="row">
  <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
    <strong>Total price: {{ $totalPrice}}</strong>
  </div>
</div>
<hr>
<div class="row">
  <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
    <a href="{{ route('checkout')}}" type="button" class="btn btn-success">Checkout</a>
  </div>
</div>
@else
<div class="row">
  <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
    <h2>No items in cart!</h2>
  </div>
</div>
@endif
@endsection
