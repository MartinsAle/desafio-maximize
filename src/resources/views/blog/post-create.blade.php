@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('post-index') }}">Início</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Criar Post</li>
                    </ol>
                </nav>
                <h1 class="fw-bold display-1 title mb-5">Criar Post</h1>
                <form method="POST" action="{{ route('publish-post') }}" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="titulo" class="form-label">Titulo</label>
                        <input type="text" name="titulo" class="form-control" id="titulo" placeholder="Titulo do post">
                    </div>
                    <div class="mb-3">
                        <label for="descricao" class="form-label">Descricao</label>
                        <input type="text" class="form-control" id="descricao" placeholder="Descrição do post">
                    </div>
                    <div class="mb-3">
                        <label for="texto-completo" class="form-label">Texto</label>
                        <textarea name="texto-completo" class="form-control" id="texto-completo" cols="30" rows="5" placeholder="Texto do post"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="imagem" class="form-label">Imagem</label>
                        <input type="file" class="form-control" id="imagem">
                    </div>
                    <hr class="hr hr-blurry" />
                    <button type="submit" class="btn btn-primary btn-yellow">Criar Post</button>
                </form>
            </div>
        </div>
    </div>
@endsection
