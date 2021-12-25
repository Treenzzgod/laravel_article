@extends('layouts.post')

@section('container')
<div class="container mt-5">
    <div class="row gap-5">
        @foreach ($posts as $post)
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">{{ $post->title }}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">{{ $post->category->nama }}</h6>
                    <p class="card-text">{{ $post->excerpt }}</p>
                    <a href="/post/{{ $post->slug }}" class="card-link">Read More...</a>
                    <p class="card-text">View: {{ $post->views }}</p>
                    {{-- <a href="#" class="card-link">Another link</a> --}}
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
