@extends('layout.main')

@section('container')
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-8">
                <h2>{{ $post->title }}</h2>
                <p>By <a href="/blog?authors={{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in  <a href="/blog?category={{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>
                
                @if ($post->image)
                    <div style="max-height: 350px; overflow: hidden;">
                        <img src="{{ asset('storage/' . $post->image) }}" class="img-fluid" alt="{{ $post->category->name }}">    
                    </div>
                @else
                    <img src="https://source.unsplash.com/800x300?{{ $post->category->name }}" class="card-img-top" alt="{{ $post->category->name }}">
                @endif
                <article class=" mt-3 mb-3 fs-6">
                    {!! $post->body !!}    
                </article>

                <a href="/blog" class="d-block mt-3">Back to Blog</a>
            </div>
        </div>
    </div>
    
@endsection