@extends('layouts.post')

@section('container')
<h1 class="mb-5">{{ $title }}</h1>
<div class="container mt-5">
    <div class="row gap-5">
        @foreach ($post as $posting)
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">{{ $posting->title }}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">{{ $posting->category->nama }}</h6>
                    <p class="card-text">{{ $posting->excerpt }}</p>
                    <a href="/post/{{ $posting->slug }}" class="card-link">Read More...</a>
                    <p class="card-text">View: {{ $posting->views }}</p>
                    {{-- <a href="#" class="card-link">Another link</a> --}}
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
