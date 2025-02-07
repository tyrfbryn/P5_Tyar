<header>
    <div class="collapse bg-dark" id="navbarHeader">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-md-7 py-4">
                    <h4 class="text-white">Tyomakannyasoto</h4>
                    <p class="text-muted">
                        <li><a href="{{url('penulis')}}" class="text-warning">Penulis</a></li>
                        <li><a href="{{url('artikel')}}" class="text-warning">Artikel</a></li>
                        <li><a href="{{url('kategori')}}" class="text-warning">Kategori</a></li>
                    </p>
                </div>
                <div class="col-sm-4 offset-md-1 py-4">
                    @guest
                    <h4 class="text-white">Login/Register</h4>
                    <ul class="list-unstyled">
                        <li><a href="{{url('login')}}" class="text-white">Login</a></li>
                        <li><a href="{{url('register')}}" class="text-white">Register</a></li>
                    </ul>
                    @else
                    <h4 class="text-white">{{Auth::user()->name}}</h4>
                    <ul class="list-unstyled">
                        <li>
                            <a href="{{url('logout')}}" class="text-white"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                Logout
                            </a>
                        </li>
                        {{-- form untuk logout --}}
                        <form action="{{route('logout')}}" method="POST" id="logout-form">
                            @csrf
                        </form>
                    </ul>
                    @endguest
                </div>
            </div>
        </div>
    </div>
    <div class="navbar navbar-dark bg-dark shadow-sm">
        <div class="container">
            <a href="#" class="navbar-brand d-flex align-items-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor"
                    stroke-linecap="round" stroke-linejoin="round" stroke-width="2" aria-hidden="true" class="me-2"
                    viewBox="0 0 24 24">
                    <path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z" />
                    <circle cx="12" cy="13" r="4" />
                </svg>
                <strong>tyomakannyasoto</strong>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader"
                aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </div>
</header>
