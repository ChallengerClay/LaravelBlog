@extends('layouts.home')
@section('title','Welcome to home')
@section('content')
<div class="row">
    <form action="{{url('posts.store')}}" method="POST">
    @csrf
        <div class="col-lg-6">
            <input type="text" name="title">
        </div>
        <div class="col-lg-6">
            <select id="options" name="caetgories[]" class="form-control" multiple>
                @foreach($categories as $category)
                <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
            </select >
        </div>
        <div class="col-lg-6">
            <input type="textarea" name="content">
        </div>     

        <input class="btn btn-info" type="submit" value="Crear post">
    </form>
</div>
@endsection