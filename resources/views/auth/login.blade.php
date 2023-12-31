<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('assets/img/logoangkatan.png') }}" rel="icon">

    <title>@yield('title', 'Login')</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('assets/css/loginregis.css') }}">
</head>

<body>
    <div class="container p-5 mt-5" id="kontenlogin">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card shadow-sm mb-5">
                    <div class="card-body p-5">
                        @if($errors->any())
                            <div class="alert alert-danger" role="alert">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>
                                            {{ $error }}
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <button type="submit" class="btn btn-warning"><a
                                class="link-light link-offset-2 link-underline link-underline-opacity-0"
                                href="{{ route('index') }}">
                                < </a></button>
                        <div class="text-center pb-2" id="title">
                            Login Riversky
                            <img src="{{ asset('assets/img/logoangkatan.png') }}" alt="RIVERSKY">
                        </div>
                        <form action="{{ route('login.post') }}" class="form" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="username" class="form-label">Username</label>
                                <input type="username" class="form-control" id="username" name="username"
                                    placeholder="Enter Username">
                            </div>
                            <div class="mb-3">
                                <label for="Password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" name="password"
                                    placeholder="Enter Password">
                            </div>
                            <div class="mb-3">
                                <p>Belum punya akun?
                                    <a class="link-warning link-offset-2 link-underline link-underline-opacity-0"
                                        href="{{ route('register') }}">Register</a>
                                </p>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
</body>

</html>
