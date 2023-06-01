@auth


    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Menu</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/home">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Crear
                        </a>
                        <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="/enquestas/create">Enquesta </a></li>
                                    <li><a class="dropdown-item" href="/enquestadors/create">Enquestador</a></li>
                                    <li><a class="dropdown-item" href="/preguntas/create">Pregunta</a></li>
                                </ul>
                    </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/enquestadors">Enquestadors</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/enquestas">Enquestas</a>
                        </li>
                   
                    <li class="nav-item">
                        <a class="nav-link disabled"></a>
                    </li>
                </ul>
                    <ul class="navbar-nav me-5 mb-2 mb-lg-0">

                        @auth
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    {{ auth()->user()->name ?? auth()->user()->username }}
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="/logout">Logout </a></li>
                                </ul>
                            </li>
                        @endauth

                        <li class="nav-item">
                            <a class="nav-link disabled"></a>
                        </li>
                    </ul>
            </div>
        </div>
    </nav>

@endauth

@guest
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Menu</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled"></a>
                    </li>
                </ul>

              
                    <ul class="navbar-nav me-2 mb-2 mb-lg-0">
                        <li><a class="btn btn-outline-success" href="/login">Login</a></li>
                        <li style="margin-left: 10px;"><a class="btn btn-outline-success" href="/register">Registrat</a></li>
                    </ul>

            </div>
        </div>
    </nav>
@endguest
