@extends('layouts.home')
@section('title','Check some of our categories')
@section('content')

@if (count($categories) > 0)
    <h2 class="text-center py-5"></h2>
<div class="d-flex flex-wrap flex-lg-row flex-md-row flex-xs-column flex-sm-column justify-content-lg-center justify-content-md-center justify-content-sm-center justify-content-xs-center">
    @foreach($categories as $category)
        <a class="link-underline link-underline-opacity-0" href="{{route('posts.public',['category' => $category->id])}}">
            <div class="card mx-3 flex-wrap my-sm-4" style="width: 21rem;">
                <div class="card-body">
                    <h5 class="card-title">{{$category->name}}</h5>
                    <p class="card-text">{{$category->description}}</p>
                    <span class="badge bg-secondary">Publicaciones: {{$category->posts->count()}}</span>
                </div>
            </div>
        </a>
    @endforeach

</div>

    <!-- Pagination Links -->
    <div class="pagination d-flex justify-content-center py-5">
    {{ $categories->links('pagination::bootstrap-5') }}
    </div>

@else 
    <div><h2>Stay tuned for newer posts</h2></div>
@endif
@endsection