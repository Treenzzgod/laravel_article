@extends('layouts.layouts')

@section('container')

 <section class="container-fluid py-5" id="trending">
        <div class="container py-3">
            <div class="d-flex flex-wrap justify-content-around">
                @foreach ($categories as $category)
                    <div class="card border-info mb-3 " style="width: 15rem;">
                        <div class="card-header text-center"><h5 class="fw-bold">{{ $category->nama }}</h5></div>
                        <div class="card-body">
                            <a class="d-flex justify-content-center" href="{{ route('categories.show', $category->slug) }}">
                                <button type="button" class="btn btn-read btn-success">Show Categories</button>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

@endsection
