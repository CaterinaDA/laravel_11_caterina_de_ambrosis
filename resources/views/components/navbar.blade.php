<nav class="navbar navbar-expand-lg navbar-dark bg-dark border-bottom border-secondary shadow-sm">
    <div class="container">
        <a class="navbar-brand fw-bold" href="{{ route('home') }}">
            IlPunto
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}">Home</a>
                </li>

                {{-- Link pubblici articoli (solo lettura) --}}
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('article.index') }}">Articoli</a>
                </li>

                {{-- Link per ospiti --}}
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Login</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">Registrati</a>
                    </li>
                @endguest

                {{-- Link per utenti loggati --}}
                @auth
                    <li class="nav-item">
                        <span class="nav-link text-light">
                            Welcome {{ Auth::user()->name }}
                        </span>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('article.create') }}">Crea articolo</a>
                    </li>

                    <li class="nav-item">
                        <form method="POST" action="{{ route('logout') }}" class="d-inline">
                            @csrf
                            <button class="btn btn-link nav-link text-danger">
                                Logout
                            </button>
                        </form>
                    </li>
                @endauth

            </ul>
        </div>
    </div>
</nav>
