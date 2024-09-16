<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        body, html {
            margin: 0;
            padding: 0;
            width: 100%;
            height: 100%;
        }
        .navbar {
            background-color: #e1d89f !important; 
            position: fixed; 
            width: 100%; 
            top: 0; 
            z-index: 1000; 
            border: none;
            box-shadow: none;
            transition: top 0.3s; 
        }
        .navbar.hidden {
            top: -56px; 
        }
        .navbar .navbar-brand, 
        .navbar .nav-link {
            color: #000 !important; 
        }
        .navbar .nav-link:hover {
            color: #555 !important; 
        }
        .jumbotron { 
            background: url('{{ asset('images/1200X400.png') }}') center center no-repeat; 
            background-size: cover; 
            color: #6f4f28; 
            height: 60vh;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            margin-top: 56px; 
            z-index: 500; 
            position: relative; 
        }
        .jumbotron h1 { 
            font-size: 4rem; 
            margin-bottom: 20px;
            color: #6f4f28; 
        }
        .jumbotron p {
            font-size: 1.5rem;
            margin-bottom: 30px;
            color: #6f4f28; 
        }
        .btn-shop-now {
            background-color: #e1d89f; 
            border-color: #f0e68c; 
            color: #000; 
        }

        .btn-shop-now:hover {
            background-color: #e4d5b7; 
            border-color: #e1d89f; 
            color: #000; 
        }
        .footer { 
            background-color: #e4d5b7; 
            color: #fff; 
            padding: 20px 0; 
            text-align: center; 
        }
        .mb-custom {
            margin-bottom: 30px; 
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="/">Crafts N' Wraps</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
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

    <!-- Jumbotron -->
    @yield('jumbotron')

    @yield('content')

    <!-- Footer -->
    <footer class="footer mt-5">
        <div class="container">
            <p>&copy; 2024 Crafts N' Wraps. All rights reserved.</p>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Custom JS -->
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
