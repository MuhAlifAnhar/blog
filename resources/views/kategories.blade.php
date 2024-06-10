@extends('layout/main')

@section('ayam')
    <title>Alif Blog | Blog</title>
@endsection

@section('aslina')
    <h1 class="mb-5">Post Kategories</h1>

    <div class="container">
        <div class="row">
            @foreach ($kategories as $blog_blog)
                <div class="col-md-4">
                    <a href="/kategori/{{ $blog_blog->slug }}">
                    <div class="card text-bg-dark">
                        <img src="https://source.unsplash.com/500x500?{{ $blog_blog->nama }}" class="card-img" alt="{{ $blog_blog->nama }}">
                        <div class="card-img-overlay d-flex align-items-center p-0">
                        <h5 class="card-title text-center flex-fill p-4 fs-3" style="background-color: rgba(0, 0, 0, 0.7)">{{ $blog_blog->nama }}</h5>
                        </div>
                    </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
