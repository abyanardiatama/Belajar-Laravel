@extends('dashboard.layouts.main')

@section('container')
    <div class="container">
        <div class="row my-3">
            <div class="col-lg-8">
                <h2>{{ $post->title }}</h2>
                <a href="/dashboard/posts" class="btn btn-success"><span data-feather="arrow-left" class="align-text-top"></span> Back to my posts</a>
                <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning"><span data-feather="edit" class="align-text-top"></span> Edit</a>
                {{-- <a href="" class="btn btn-danger"><span data-feather="trash-2" class="align-text-top "></span> Delete</a> --}}
                <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                    <button class="btn btn-danger" onclick="return confirm('Are you sure?')"><span data-feather="trash-2" class="align-text-top "></span>Delete</button>
                </form>

                @if ($post->image)
                    <div style="max-height: 350px; overflow: hidden;">
                        <img src="{{ asset('storage/' . $post->image) }}" class="img-fluid mt-3" alt="{{ $post->category->name }}">    
                    </div>
                @else
                    <img src="https://source.unsplash.com/800x300?{{ $post->category->name }}" class="img-fluid mt-3" alt="{{ $post->category->name }}">
                @endif
                <article class=" mt-3 mb-3 fs-6">
                    {!! $post->body !!}    
                </article>
            </div>
        </div>
    </div>

@endsection