@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Início</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Blog</li>
                    </ol>
                </nav>
                <div class="post-content">
                    <h1 class="h1 fw-bold mb-5 mt-5">Lorem ipsum dolor sit amet.</h1>
                    <img class="img-fluid mb-4" src="https://placehold.co/820x300" alt="">
                    <p class="mb-5">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatem sint asperiores quis veniam praesentium, tempora natus unde! Nostrum, voluptatibus. Nisi, officia animi. Nulla, vel. Sit atque blanditiis cumque necessitatibus, possimus illo voluptatibus iure nulla dolore in repudiandae. Neque temporibus suscipit facere molestias accusantium hic, voluptate dolore deserunt. Vero, consequatur magni.</p>
                    <hr class="hr hr-blurry" />
                </div>
            </div>
        </div>
    </div>
@endsection
