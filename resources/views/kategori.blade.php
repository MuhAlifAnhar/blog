@extends('layout/main')

@section('ayam')
    <title>Alif Blog | Blog</title>
@endsection

@section('aslina')
    <h1 class="mb-5">Post Kategori : {{ $kategori }}</h1>
    @foreach ($posts as $blog_blog)
        <article class="mb-5">
            <h2>
                <a href="/blog/{{ $blog_blog->slug }}">{{ $blog_blog->title }}</a>
            </h2>
            <p>{{ $blog_blog->excerpt }}</p>
        </article>
    @endforeach
@endsection
