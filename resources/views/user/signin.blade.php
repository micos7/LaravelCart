@extends('layouts.master')

@section('content')
<div class="row">
  <div class="col-md-4 col-md-offset-4">
    <h1> Sign In</h1>
    @if(count($errors) > 0)
    <div class="alert alert-danger">
      <p>
        {{ $error}}
      </p>
    </div>
    @endif
    <form action="{{ route('user.signin')}}" method="post">
      <div class="form-group">
        <label for="email">E-mail</label>
        <input type="text" class="form-control" id="email" name="email" placeholder="">
        <p class="help-block">Enter your email</p>
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="">
        <p class="help-block">Enter your password</p>
      </div>
      <button type="submit" class="btn btn-primary">Sign In</button>
      {{ csrf_field()}}
    </form>
  </div>
</div>

@endsection
