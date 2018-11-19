<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    {{-- Bootstrap --}}
    <link rel="stylesheet" href="{{asset('css/app.css')}}">

    {{-- Style General --}}
    <link rel="stylesheet" href="{{asset('css/styleGeneral.css')}}">

    {{-- Style Header --}}
    <link rel="stylesheet" href="{{asset('css/styleHeader.css')}}">

    {{-- Style Footer --}}
    <link rel="stylesheet" href="{{asset('css/styleFooter.css')}}">

    {{-- Style Index --}}
    <link rel="stylesheet" href="{{asset('css/styleIndex.css')}}">

    {{-- Fonts --}}
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,700" rel="stylesheet">

    <title>Encomax</title>
</head>
<body>
    <header>
        <div class="container d-flex justify-content-between">
            <img src="{{asset('img/logo-encomax.png')}}" alt="">
            <ul>
                <li><a href="">Sistemas</a></li>
                <li><a href="">Columnas</a></li>
                <li><a href="">Novedades</a></li>
                <li><a href="">Contacto</a></li>
            </ul>
        </div>
    </header>
    <main>
        @yield('content')
    </main>
    <footer>
        <div class="container">
            <div class="row d-flex justify-content-between">
                <div class="col-md-3 col-sm-12">
                    <article>
                        <h2>Buenos Aires</h2>
                        <p>Dirección: 3 de Febrero 4456 • (B1678HVC) Caseros • Provincia de Buenos Aires • Argentina</p>
                        <p>Teléfono: (011) 5263 8899 • (011) 4759 0129</p>
                        <p>Mail: info@leiten.com.ar</p>
                        <p>Horarios: Lunes a Viernes 8:00hs a 17:00hs</p>
                    </article>
                </div>
                <div class="col-md-3 col-sm-12">
                    <article>
                        <h2>Rosario</h2>
                        <p>Dirección: 3 de Febrero 4456 • (B1678HVC) Caseros • Provincia de Buenos Aires • Argentina</p>
                        <p>Teléfono: (011) 5263 8899 • (011) 4759 0129</p>
                        <p>Mail: info@leiten.com.ar</p>
                        <p>Horarios: Lunes a Viernes 8:00hs a 17:00hs</p>
                    </article>
                </div>
                <div class="col-md-3 col-sm-12">
                    <article>
                        <h2>Tucumán</h2>
                        <p>Dirección: 3 de Febrero 4456 • (B1678HVC) Caseros • Provincia de Buenos Aires • Argentina</p>
                        <p>Teléfono: (011) 5263 8899 • (011) 4759 0129</p>
                        <p>Mail: info@leiten.com.ar</p>
                        <p>Horarios: Lunes a Viernes 8:00hs a 17:00hs</p>
                    </article>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>