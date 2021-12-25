@extends('layouts.layouts')

@section('container')
<section class="container-fluid">
    <div class="container">
        <header class="masthead pt-5">
            <div class="container position-relative px-4">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 ">
                        <div class="post-heading">
                            <h1>{{ $post->title }}</h1>
                            {{-- <h2 class="subheading">Problems look mighty small from 150 miles up</h2> --}}
                            <span class="meta mt-5">
                                Posted by
                                <a href="#!">Admin</a>
                                on {{ \Carbon\Carbon::parse($post['published_at'])->toDateString() }}
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </header>
    </div>
</section>
<section class="container-fluid">
    <div class="container">
        <article class="mb-4">
            <div class="px-4">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8">
                        <img src="{{ asset('storage/'. $post->image) }}" alt="" class="img-fluid pb-3" width="500" height="500">
                        {!! $post->body !!}
                    </div>
                </div>
            </div>
        </article>
    </div>
</section>
@endsection
