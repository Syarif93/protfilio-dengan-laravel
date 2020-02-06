<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Portfolio</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('fontawesome-free/css/all.css') }}">
</head>

<body id="bg-image">
    <header>
        <div class="menu-btn">
            <div class="btn-line"></div>
            <div class="btn-line"></div>
            <div class="btn-line"></div>
        </div>

        <div class="auth-bar">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a class="nav-link logout-btn" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    @else
                        <a href="{{ route('login') }}" class="nav-link log-link">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="nav-link regis-link">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>

        <nav class="menu">
            <div class="menu-branding">
                <div class="potrait"></div>
            </div>
            <ul class="menu-nav">
                <li class="nav-item current">
                    <a href="index.html" class="nav-link">Beranda</a>
                </li>
                <li class="nav-item">
                    <a href="about.html" class="nav-link">Tentang Saya</a>
                </li>
                <li class="nav-item">
                    <a href="projects.html" class="nav-link">Proyek</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Kontak</a>
                </li>
            </ul>
        </nav>
    </header>

    <main id="home">
        <h1 class="lg-heading">
            Moh <span class="text-secondary">Sarifudin</span>
        </h1>
        <h2 class="sm-heading">
            Web Developer, Programer & Designer
        </h2>
        <div class="icons">
            <a href="#!">
                <i class="fab fa-instagram fa-2x"></i>
            </a>
            <a href="#!">
                <i class="fab fa-twitter fa-2x"></i>
            </a>
            <a href="#!">
                <i class="fab fa-github fa-2x"></i>
            </a>
        </div>
    </main>


    <script src="js/main.js"></script>
</body>

</html>