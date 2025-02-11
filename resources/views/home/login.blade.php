@extends('layouts.home')
@section('title','Login')
@section('content')
<div class="container py-5">
<form action="{{route('login.post')}}" method="POST">
    @csrf
    <div class="form-group py-3">
      <label for="email">Correo</label>
      <input type="email" class="form-control" id="email" name="email" placeholder="Email">
    </div>
    <div class="form-group my-3">
      <label for="password">Password</label>
      <input type="password" class="form-control" id="password" name="password" placeholder="Password">
    </div>
    <button type="submit" class="btn btn-dark">Login</button>
  </form>
</div>
@endsection