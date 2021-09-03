<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Boats</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/images/favicon.ico') }}/" />
    <!-- Bootstrap icons-->
    <link href="{{ asset('assets/css/bootstrap-icons.css') }}" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet" />

    @livewireStyles

</head>
<body>
<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-dark" style="position: fixed;width: 100%;z-index: 1;">
    <div class="container px-4 px-lg-5">
        <a class="navbar-brand" href="#!"><img src="{{ asset('assets/images/icons/logo.svg') }}" alt="" class="w-25 h-25"/></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                <li class="nav-item"><a class="nav-link active font-weight-bold text-white" aria-current="page" href="#!">Home</a></li>
                <li class="nav-item"><a class="nav-link font-weight-bold text-white" href="#!">About</a></li>
                <li class="nav-item"><a class="nav-link font-weight-bold btn btn-sm btn-success text-white" href="#!">Booking</a></li>
            </ul>
            <ul class="navbar-nav ml-auto">
                @if(Route::has('login'))
                    @auth
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle text-white" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">{{ Auth::user()->name }}</a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                                    <li><hr class="dropdown-divider" /></li>
                                    <li class="dropdown-item">
                                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout').submit();">Logout</a>
                                    </li>
                                    <form id="logout" method="POST" action="{{ route('logout') }}">
                                        @csrf
                                    </form>
                                </ul>
                            </li>
                    @endif
                @endif
            </ul>
        </div>
    </div>
</nav>

{{ $slot }}

<!-- Footer-->
<footer class="py-5 bg-dark">
    <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Your Website 2021</p></div>
</footer>
<!-- Bootstrap core JS-->
<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
<!-- Core theme JS-->
<script src="{{ asset('assets/js/scripts.js') }}"></script>

@livewireScripts

</body>
</html>
