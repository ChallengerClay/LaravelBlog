@extends('layouts.home')

@section('title', 'Signup to this page')

@section('content')
<div class="row">
    <form action="{{url('signup')}}" method="POST">
    @csrf
        <div class="col-lg-6">
            <input type="text" name="name">
        </div>
        <div class="col-lg-6">
            <input type="email" name="email" >
        </div>
        <div class="col-lg-6">
            <input type="password" name="password">
        </div>     

        <input class="btn btn-info" type="submit" value="registrarse">
    </form>
</div>
@endsection