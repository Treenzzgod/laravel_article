@extends('layouts.post')


@section('container')
<div class="container mt-5">
    <div class="row gap-5">
        @foreach ($categories as $category)
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">{{ $category->nama }}</h5>
                    <a href="{{ route('categories.show', $category->slug) }}" class="card-link">Show Categories</a>
                    <a href="#" class="card-link">Another link</a>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
