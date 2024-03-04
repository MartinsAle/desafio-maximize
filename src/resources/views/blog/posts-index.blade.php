@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1 class="fw-bold display-1 title mb-5">Blog</h1>
                @foreach ($posts as $post)
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row g-0 shadow bg-body-tertiary rounded ">
                            <div class="col-md-4">
                                <img src="{{ url($post->imagem ? 'images/' . $post->imagem : 'https://placehold.co/600x600') }}"
                                    class="img-fluid rounded-start card-img-post" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body text-end">
                                    <h5 class="card-title text-start">{{ $post->titulo }}</h5>
                                    <p class="card-text text-start">{{ $post->descricao }}</p>
                                    <a href="{{ route('post-single', ['id' => $post->id]) }}" class="card-link">LER MAIS</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
