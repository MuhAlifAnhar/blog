@extends('layout/main')

@section('ayam')
    <title>Alif Blog | Blog</title>
@endsection

@section('aslina')

    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-8">
                <h1 class="mb-3">{{ $posts->title }}</h1>
            
                <p>By. <a href="/penulis/{{ $posts->penulis->username }}" class="text-decoration-none">{{ $posts->penulis->name }}</a> in <a href="/kategori/{{ $posts->kategori->slug }}" class="text-decoration-none">{{$posts->kategori->nama}}</a></p>
            
                <img src="https://source.unsplash.com/1200x400?{{ $posts->kategori->nama }}" alt="{{ $posts->kategori->nama }}" class="img-fluid">

                <article class="my- fs-5">
                    {!! $posts->body !!}
                </article>

                <a href="/blog" class="d-block mt-3">Kembali</a>
            </div>
        </div>
    </div>
@endsection