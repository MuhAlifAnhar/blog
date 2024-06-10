@extends('layout/main')

@section('ayam')
    <title>Alif Blog | Blog</title>
@endsection

@section('aslina')
    <h1 class="mb-5">Post Penulis : {{ $user }}</h1>
    @foreach ($posts as $blog_blog)
        <article class="mb-5">
            <h2>
                <a href="/blog/{{ $blog_blog->username }}">{{ $blog_blog->title }}</a>
            </h2>
            <p>{{ $blog_blog->excerpt }}</p>
        </article>
    @endforeach
@endsection
