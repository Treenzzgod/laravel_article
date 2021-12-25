@extends('layouts.layouts')

@section('container')

  <!--Landing Page-->
  <section class="container-fluid mb-4">
      <div class="container pb-5">
          <div class="row d-flex justify-content-center">
              <div class="col-12 col-lg-11 py-3">
                <div class="d-flex align-items-center">
                  <div class="flex-grow-1 ms-3">
                    <h1 class="py-3 primary-text">Selamat Datang di Website Lava Read</h1>
                    <p class="pt-1 pb-3 lh-base p-text m-r-50">
                      Selamat datang Lava Read disini kita dapat membaca artikel seputar ilmu kesehatan, perawatan dan kedokteran. Website ini dibuat agar para pembaca dapat membaca artikel kesehatan dimanapun dan kapanpun
                    </p>
                    <div class="col-7 py-3">
                      <a class="py-3" href="#trending">
                        <button type="button" class="btn btn-read btn-success btn-lg">Let's Read ></button>
                      </a>
                    </div>
                  </div>
                  <div class="flex-shrink-0">
                    <div class="d-none d-lg-block py-5 px-1">
                      <img src="/storage/images/hero-landing.svg" alt="landing" class="img-fluid">
                    </div>
                  </div>
                </div>
              </div>
          </div>
      </div>
  </section>
  <!--Latest Added Section-->
  <section class="container-fluid pb-5" id="trending">
    <div class="container pb-5">
      <div class="secondary-text h-75 shadow p-3 mb-5 bg-body border rounded-3 d-flex justify-content-center">
        <span class="p-t-10">Latest Added</span>
      </div>

      @foreach ($posts as $post)
        <div class="card mb-3" style="height: 200px; width: auto;">
            <div class="row g-0">
            <div class="col-md-3">
                <img src="{{ asset('storage/'. $post->image) }}" class="img-fluid rounded-start d-none d-lg-block" alt="..." style="height: 200px; width: auto;">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                <h5 class="card-title">{{ $post->title }}</h5>
                <p class="card-text mb-xl-5 mb-sm-4">{{ $post->excerpt }}</p>
                <div class="d-flex justify-content-between my-4">
                    <a href="post/{{ $post->slug }}">
                    <button type="button" class="btn btn-sm btn-primary">Read More</button>
                    </a>
                    <p class="card-text"><small class="text-muted">{{ \Carbon\Carbon::parse($post['published_at'])->toDateString() }}</small></p>
                </div>
                </div>
            </div>
            </div>
        </div>
      @endforeach
      <div class="d-flex justify-content-end">
        <a class="py-3" href="/post">
          <button type="button" class="btn btn-primary mt-3">Load More</button>
        </a>
      </div>
    </div>
  </section>

@endsection
