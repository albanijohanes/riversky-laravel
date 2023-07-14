<nav class="navbar navbar-expand-lg" id="navigasi">
    <div class="container-fluid">
        <img src="{{ asset('assets/img/logoangkatan.png') }}">
        <h1><a class="navbar-brand" href="{{ route('index') }}">Riversky</a></h1>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto ms-auto mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('index') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('about') }}">About us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('achievement') }}">Achievement</a>
                </li>
            </ul>
            <ul class="navbar-nav d-flex" id="current">
                <li class="nav-link">
                    <a href="{{ route('login') }}">Login</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
