@extends('layout/main')

@section('ayam')
    <title>Alif Blog | Blog</title>
@endsection

@section('aslina')

<div class="row justify-content-center mt-5 mb-3">
    <div class="col-md-6">
        <form action="/blog">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Search.." name="pencarian" value="{{ request('pencarian') }}">
                <button class="btn btn-danger" type="submit">Search</button>
              </div>
        </form>
    </div>
</div>

    @if ($posts->count())
        <div class="card mb-3">
            <img src="https://source.unsplash.com/1200x400?{{ $posts[0]->kategori->nama }}" class="card-img-top" alt="{{ $posts[0]->kategori->nama }}">
            <div class="card-body text-center">
                <h3 class="card-title"><a href="/blog/{{ $posts[0]->slug }}" class="text-decoration-none text-dark">{{ $posts[0]->title }}</a></h3>
                <p>
                    <small class="text-body-secondary">
                        By. <a href="/penulis/{{ $posts[0]->penulis->username }}" class="text-decoration-none">{{ $posts[0]->penulis->name }}</a> in <a href="/kategori/{{ $posts[0]->kategori->slug }}" class="text-decoration-none">{{$posts[0]->kategori->nama}}</a> {{ $posts[0]->created_at->diffForHumans() }}
                    </small>
                </p>
                <p class="card-text">{{ $posts[0]->excerpt }}.</p>
                <a href="/blog/{{ $posts[0]->slug }}" class="text-decoration-none btn btn-primary">Read more</a>
            </div>
        </div>

    <div class="container">
        <div class="row">
            @foreach ($posts->skip(1) as $blog_blog)
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <div class="position-absolute px-3 py-2 text-white" style="background-color: rgba(0, 0, 0, 0.7)"><a href="/kategori/{{ $blog_blog->kategori->slug }}" class="text-decoration-none text-white">{{ $blog_blog->kategori->nama }}</a></div>
                        <img src="https://source.unsplash.com/500x400?{{ $blog_blog->kategori->nama }}" class="card-img-top" alt="{{ $blog_blog->kategori->nama }}">
                        <div class="card-body">
                        <h5 class="card-title">{{ $blog_blog->title }}</h5>
                        <p>
                            <small class="text-body-secondary">
                                By. <a href="/penulis/{{ $blog_blog->penulis->username }}" class="text-decoration-none">{{ $blog_blog->penulis->name }}</a> {{ $blog_blog->created_at->diffForHumans() }}
                            </small>
                        </p>
                        <p class="card-text">{{ $blog_blog->excerpt }}</p>
                        <a href="/blog/{{ $blog_blog->slug }}" class="btn btn-primary">Read more</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    @else
        <p class="text-center fs-4">No post found.</p>
    @endif
@endsection
