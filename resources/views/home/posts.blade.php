@extends('layouts.home')
@section('title','Check our posts')
@section('content')

@if (count($posts) > 0)
    <h2 class="text-center py-5">A better view of our blog post</h2>
<div class="d-flex flex-lg-row flex-md-row flex-xs-column flex-sm-column justify-content-lg-center justify-content-md-center justify-content-sm-center justify-content-xs-center">
    @foreach($posts as $post)
        <a class="link-underline link-underline-opacity-0" href="{{route('post.public',['id' => $post->id])}}">
            <div class="card mx-3 flex-wrap my-sm-4" style="width: 21rem;">
                <div class="card-body">
                    <h5 class="card-title">{{$post->title}}</h5>
                    <p class="card-text">{{$post->content}}</p>
                    @foreach($post->categories as $category)
                        <span class="badge bg-secondary">{{$category->name}}</span>
                    @endforeach
                </div>
            </div>
        </a>
    @endforeach

</div>

    <!-- Pagination Links -->
    <div class="pagination d-flex justify-content-center py-5">
    {{ $posts->links('pagination::bootstrap-5') }}
    </div>

@else 
    <div><h2>Stay tuned for newer posts</h2></div>
@endif
@endsection