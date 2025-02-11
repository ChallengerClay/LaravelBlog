@extends('layouts.home')
@section('title','Welcome to our page')
@section('content')
<div class="container py-3">
    <div class="row my-2">
        <h2>Our latest posts</h2>
    </div>
    <div class="d-flex justify-content-around my-3">
        @foreach($posts as $post)
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">{{$post->title}}</h5>
                    <p class="card-text">{{$post->content}}</p>
                        @foreach($post->categories as $category)
                            <span class="badge bg-secondary">{{$category->name}}</span>
                        @endforeach
                </div>
            </div>
        @endforeach

    </div>
    <a class="d-flex justify-content-center link-body-emphasis text-center link-underline-darklink-offset-2 link-underline link-underline-opacity-0" href="{{route('public.posts')}}">Go to all posts --></a>
    <div class="row my-4">
        <h2>Some categories for you</h2>
    </div>
    <div class="d-flex justify-content-around my-3">
        @foreach($categories as $category)
            <div class="card" style="width: 15rem;">
                <div class="card-body">
                <h5 class="card-title">{{$category->name}}</h5>
                <p class="card-text">{{$category->description}}</p>

                </div>
            </div>
        @endforeach

    </div>
    <a class="d-flex my-3 justify-content-center text-center link-body-emphasis link-underline-darklink-offset-2 link-underline link-underline-opacity-0" href="{{route('public.posts')}}">Go to all categories --></a>
</div>
@endsection