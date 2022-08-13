@extends('layouts.plantilla')
@section('titulo','Inicio')
@section('content')
<h2 class="text-center " style="background:#6c0010;">
    <span class="shadow-sm text-white"> Bienvenido a la Biblioteca Virtual</span>
</h2>
{{--
<div class="container mb-3">
    <div class="row justify-content-center">
        <div class="col-sm-12">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="https://picsum.photos/500/200" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="https://picsum.photos/500/200" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="https://picsum.photos/500/200" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-target="#carouselExampleControls"
                    data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-target="#carouselExampleControls"
                    data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </button>
            </div>
        </div>

    </div>
</div>
--}}
<a href="./home">Home</a>
<div class="container">
    <h5 class="text-center">Colecciones</h5>
    <hr>
    <div class="row justify-content-between">

        @for ($i = 0; $i < 32; $i++)
            <div class="col-sm-12 col-md-4 mb-2">
                <a href="" class="text-decoration-none ">
                    <div class="card">
                        <img src="https://picsum.photos/150/100" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text text-dark">Some quick example text to build on the card title and make
                                up the bulk of the card's content.</p>
                        </div>
                    </div>
                </a>
            </div>
        @endfor
    </div>
</div>
@endsection