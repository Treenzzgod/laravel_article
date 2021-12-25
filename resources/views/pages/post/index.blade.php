@extends('layouts.layouts')

@section('container')
    <!--Trending Section-->
<section class="container-fluid py-5" id="trending">
    <div class="container py-3">
        <div class="secondary-text h-75 shadow p-3 mb-5 bg-body border rounded-3 d-flex justify-content-center">
        <span class="p-t-10">Trending Article</span>
        </div>
        <div class="card">
        <div class="d-flex justify-content-center">
            <img src="{{ asset('/storage/'.$postFavorite->image)}}" class="card-img-top img-fluid img-card" alt="...">
        </div>
        <div class="card-body">
            <h5 class="card-title">{{ $postFavorite->title }}</h5>
            <p class="card-text">
            {{ $postFavorite->excerpt }}. . . . . . .
            </p>
            <div class="py-2 d-flex justify-content-between">
            <a href="/post/{{ $postFavorite->slug }}" type="button" class="btn btn-primary btn-sm">Read More</a>
            <p class="card-text"><small class="text-muted">{{ \Carbon\Carbon::parse($postFavorite['published_at'])->toDateString() }}</small></p>
            </div>
        </div>
        </div>
    </div>
</section>
    <!--Article Section-->
<section class="container-fluid pb-5" id="trending">
    <div class="container pb-5">
        <div class="secondary-text h-75 shadow p-3 mb-5 bg-body border rounded-3 d-flex justify-content-center">
            <span class="p-t-10">Article</span>
        </div>
        <div class="loadmore-frame">
            @foreach ($posts as $post)
                <div class="card mb-3 blogBox moreBox" style="height: 200px; width: auto;">
                    <div class="row g-0">
                        <div class="col-md-3">
                            <img src="{{ asset('storage/'. $post->image) }}" class="img-fluid rounded-start d-none d-lg-block" alt="..."
                                style="height: 200px; width: auto;">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">{{ $post->title }}</h5>
                                <p class="card-text mb-xl-5 mb-sm-4">{{ $post->excerpt }}</p>
                                <div class="d-flex justify-content-between my-4">
                                    <a href="/post/{{ $post->slug }}" type="button" class="btn btn-primary btn-sm">Read More</a>
                                    <p class="card-text"><small class="text-muted">{{ \Carbon\Carbon::parse($postFavorite['published_at'])->toDateString() }}</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            <div class="d-flex justify-content-end">
                {!! $posts->links() !!}
            </div>
        </div>
    </div>
</section>
@endsection
