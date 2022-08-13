@extends('layouts.plantilla')
@section('titulo','visor de archivos')

@section('content')
<style>
    .stf__block {
        width: 90%;
        height: 100%;
    }
</style>
<script src="{{asset('js/page-flip.browser.js')}}"></script>
<div class="container mt-2">
    <div class="row justify-content-center">
        <div class="col-sm-12 col-md-4 mb-2">
            <div class="card w-100">
                <div class="card-header">
                    Titulo del libro
                </div>
                <div class="card-body">
                    <h5 class="card-title">Special title treatment</h5>
                    <p class="card-text">Informacion Adicional</p>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-4">
            <div id="book" style="max-height:85vh">
                <div class="my-page" id="page" data-density="hard">
                    <img class="w-100" src="{{asset('img/1.jpg')}}" alt="" srcset="">
                    <p class="text-center">1 of 6</p>                    
                </div>
                <div class="my-page">
                    <img class="w-100 " src="{{asset('img/2.jpg')}}" alt="" srcset="">
                    <p class="text-center">2 of 6</p>
                </div>
                <div class="my-page">
                    <img class="w-100 " src="{{asset('img/2.jpg')}}" alt="" srcset="">
                    <p class="text-center">3 of 6</p>
                </div>
                <div class="my-page">
                    <img class="w-100 " src="{{asset('img/2.jpg')}}" alt="" srcset="">
                    <p class="text-center">4 of 6</p>
                </div>
                <div class="my-page">
                    <img class="w-100 " src="{{asset('img/2.jpg')}}" alt="" srcset="">
                    <p class="text-center">5 of 6</p>
                </div>
                <div class="my-page" data-density="hard">
                    <img class="w-100 " src="{{asset('img/2.jpg')}}" alt="" srcset="">
                    <p class="text-center">6 of 6</p>
                </div>
            </div>
        </div>
    </div>
</div>


<script>
    // or if you're using a script tag and page-flip.browser.js:
    let tamaño = document.getElementById('book').offsetWidth;
    let tamaño2 = document.getElementById('book').offsetHeight;
    console.log(tamaño);
    const pageFlip = new St.PageFlip(document.getElementById('book'), {
        width: tamaño, // required parameter - base page width
        height: tamaño2, // required parameter - base page height
        showCover: true
    });
    pageFlip.loadFromHTML(document.querySelectorAll('.my-page'));
</script>

@endsection