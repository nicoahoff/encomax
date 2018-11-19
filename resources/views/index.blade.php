@extends('layouts.basic')
@section('content')
    <section class="home-encomax">
        <article>
            <h1>Encomax</h1>
            <h3>Encofrados circulares</h3>
        </article>
    </section>
    <div class="container">
        <article class="presentacion-home">
            <p>RÁPIDO. PRÁCTICO. ECONÓMICO</p>
        </article>
        <div class="row items-home">
            <div class="item-home col-lg-4 col-sm-12">
                <article>
                    <img src="{{asset('svg/varios/hourglass.svg')}}" alt="time">
                    <h3>Rapidez de instalación</h3>
                    <p>El sistema más rápido para encofrado de columnas sin necesidad de utilización de grúas. Por su ligereza se minimiza el esfuezo físico de manipulación.</p>
                </article>
            </div>
            <div class="item-home col-lg-4 col-sm-12">
                <article>
                    <img src="{{asset('svg/varios/calculator.svg')}}" alt="time">
                    <h3>Solución Económica</h3>
                    <p>La mejor relación costo beneficio de encofrado del mercado. Por su bajo costo, permite la realización simultánea de todos los pilares de la obra. Gran reducción de tiempos de obra.</p>
                </article>
            </div>
            <div class="item-home col-lg-4 col-sm-12">
                <article>
                    <img src="{{asset('svg/varios/check.svg')}}" alt="time">
                    <h3>Acabado de Calidad</h3>
                    <p>Al ser una sola pieza no existe riesgo de rotura entre capas y se evitan fugas de hormigón. Además pueden elegirse opciones de texturas para el acabado final del hormigón.</p>
                </article>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12 text-center titulo-tipos-columnas-index">
                <h2>Soluciones de encofrados Encomax</h2>
            </div>
        </div>
        <div class="row imagenes-tipos-columnas-index d-flex justify-content-center">
            <div class="col-xl-3 col-md-6 col-xs-12 text-center">
                <img class="tipo-columna-index" src="{{asset('img/foto_columna.jpg')}}" alt=""> 
                <h3>Circulares</h3>
                <a href="">Ver</a>
            </div>
            <div class="col-xl-3 col-md-6 col-xs-12 text-center">
                <img class="tipo-columna-index" src="{{asset('img/foto_columna.jpg')}}" alt=""> 
                <h3>Poligonales</h3>
                <a href="">Ver</a>
            </div>
            <div class="col-xl-3 col-md-6 col-xs-12 text-center">
                <img class="tipo-columna-index" src="{{asset('img/foto_columna.jpg')}}" alt=""> 
                <h3>Cuadradas</h3>
                <a href="">Ver</a>
            </div>
            <div class="col-xl-3 col-md-6 col-xs-12 text-center">
                <img class="tipo-columna-index" src="{{asset('img/foto_columna.jpg')}}" alt=""> 
                <h3>Medianeras</h3>
                <a href="">Ver</a>
            </div>
        </div>
    </div>
    <div class="container-fluid novedades-index d-flex justify-content-center align-items-center">
        <div class="container">
            <div class="row d-flex justify-content-between align-items-center">
                <div class="d-none d-sm-none d-md-block col-md-2 col-lg-3 imagen-novedades">
                    <img src="{{asset('img/foto_columna.jpg')}}" alt="">
                </div>
                <div class="col-xs-12 col-sm-12 col-md-7 col-lg-8 col-xl-8">
                    <article>
                        <h3>Nuevas columnas circulares con acabado liso perfecto</h3>
                        <p>Terminación final vista para dejar sus columnas perfectas desde el desencofrado.</p>
                        <a href="">Novedades</a>
                    </article>
                </div>
            </div>
        </div>
    </div>
@endsection