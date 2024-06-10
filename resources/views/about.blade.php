@extends('layout/main')

@section('ayam')
    <title>Alif Blog | About</title>
@endsection

@section('aslina')
    <h1>Ini Halaman About</h1>
    <h3>{{ $nama }}</h3>
    <p>{{ $email }}</p>
    <img src="img/{{ $image }}" alt="{{ $nama }}" width="200">
@endsection