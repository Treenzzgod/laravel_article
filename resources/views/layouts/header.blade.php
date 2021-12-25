<header class="container-fluid">
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="#">LavaRead</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav gap-4">
                    <li class="nav-item">
                        <a class="nav-link active nav-text" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-text active" href="/post">Article</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-text active" href="{{ route('categories.index') }}">Categories</a>
                    </li>

                    <!-- Authenticate Links -->
                    @guest
                        @if(Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link nav-text active" href="{{ route('login') }}">Login</a>
                        </li>
                        @endif
                        @else
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle nav-text active" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Account
                            </a>
                            <ul class="dropdown-menu align-middle" aria-labelledby="navbarDropdown">
                                <li>
                                    <p class="dropdown-item">Hello, {{ Auth::user()->name }}</p>
                                </li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="/dashboard">Go to Dashboard</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">Logout</a></li>
                                <form action="{{ route('logout') }}" id="logout-form" class="d-none" method="POST">
                                    @csrf
                                </form>
                            </ul>
                        </li>
                    @endguest
                    <li class="nav-item">
                        <form class="d-flex" action="{{ route('search') }}" method="GET">
                            <input class="form-control form-control-sm me-2" type="text" placeholder="Search"
                                aria-label="Search" name="search" id="search">
                            <button class="btn btn-sm btn-outline-success m-t-2 m-b-2" type="submit">Search</button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
