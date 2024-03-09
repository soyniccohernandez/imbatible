
<nav class="navbar navbar-expand-lg " style="background-color: #176B87;">
    <div class="container " style="display: flex; justify-content: space-between;">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('/img/logo/logo_inline.png') }}" alt="Logo imbatible" class="logo_nav_movile" style="width: 40%;" />
        </a>

        <ul class="navbar-nav me-auto mb-2 mb-lg-0 text-white w-100 mr-auto d-flex" style="justify-content: space-between; gap:2rem">
            <li class="nav-item">
                <a class="nav-link active text-white" aria-current="page" href="/dashboard">Administración</a>
            </li>
            <li class="nav-item dropdown text-white">
                <div class="dropdown">
                    <button class="btn btn-primary dropdown-toggle text-white" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        {{ Auth::user()->name }}
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/profile">Tu perfil</a></li>

                        <li>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <a href="/logout" onclick="event.preventDefault();
                                                this.closest('form').submit();" class="dropdown-item" href="#">Cerrar sesión</a>
                            </form>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>
</nav>