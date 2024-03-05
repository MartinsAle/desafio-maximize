@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('post-index') }}">Início</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Blog</li>
                    </ol>
                </nav>
                <div class="post-content">
                    <h1 class="h1 fw-bold mb-5 mt-5">{{$post->titulo}}</h1>
                    <img class="img-fluid mb-4" src="{{ url($post->imagem ? 'images/' . $post->imagem : 'https://placehold.co/800x380') }}" alt="">
                    <p class="mb-5 fw-bold">{{$post->descricao }}</p>
                    <p class="mb-5">{{$post->texto_completo }}</p>
                    <hr class="hr hr-blurry" />
                </div>
            </div>
        </div>
    </div>
@endsection
