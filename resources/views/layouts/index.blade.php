<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('sav')}}">Sav</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('partenariat')}}">Partenariat</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('info')}}">Info</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('frontend')}}">Frontend</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('backend')}}">Backend</a>
                        </li>
                        
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main class="container">
        @yield('content')
    </main>
    
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
