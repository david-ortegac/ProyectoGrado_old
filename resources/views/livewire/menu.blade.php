@if (Route::has('login'))
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #c2e5ff;">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('img/logo.png') }}" alt="" width="30" height="24">
            </a>
            <a class="navbar-brand" href="#">Smart & Computer</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <ul class="navbar-nav">
                    <li class="nav-item ">
                        <a class="nav-link active" aria-current="page" href="{{ route('index') }}">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Nosotros</a>
                    </li>

                    @auth
                        <ul>
                            <a href="{{ url('/dashboard') }}" class="nav-link">Dashboard</a>
                        </ul>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Dispositivos
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Agregar Dispositivos</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">Ver Dispositivos</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Consumos</a>
                        </li>

                        <!-- Perfil -->
                        {{-- @livewire('navigation-dropdown') --}}
                        @livewire('dropdown-menu')

                    @else
                        <ul class="nav-item">
                            <a href="{{ route('login') }}" class="nav-link">Ingresar</a>
                        </ul>
                        @if (Route::has('register'))
                            <ul class="nav-item">
                                <a href="{{ route('register') }}" class="nav-link">Register</a>
                            </ul>
                        @endif
                    @endauth
                </ul>

            </div>
        </div>
    </nav>
@endif
