<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('asset/css/style.css') }}" rel="stylesheet">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <a class="navbar-brand" href="/">Crafts N' Wraps</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/about">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/shop">Shop</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    @yield('jumbotron')

    @yield('content')

    <footer class="footer mt-5">
        <div class="container">
            <p>&copy; 2024 Crafts N' Wraps. All rights reserved.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        let prevScrollpos = window.pageYOffset;
        window.onscroll = function() {
            let currentScrollPos = window.pageYOffset;
            if (prevScrollpos > currentScrollPos) {
                document.querySelector(".navbar").classList.remove("hidden");
            } else {
                document.querySelector(".navbar").classList.add("hidden");
            }
            prevScrollpos = currentScrollPos;
        }
    </script>
</body>

</html>