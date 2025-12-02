<!DOCTYPE html>
<html>
    <style>
            .bg-darks {
    --bs-bg-opacity: 1;
    background-color: #0dcaf0 !important;
}

.navbar {
    background-color: #0d6efd;
}
    </style>

<head>
     <!-- Navbar -->
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">IT Solutions</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="http://127.0.0.1:8000/#about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="http://127.0.0.1:8000/#services">Services</a></li>
                     <li class="nav-item"><a class="nav-link" href="http://127.0.0.1:8000/#contactus">Contact Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="http://127.0.0.1:8000/#customers">Customers</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <br><br>
    <title>Customer CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <!-- <nav class="navbar navbar-expand-lg navbar-dark bg-darks mb-4">
        <div class="container">
            <a class="navbar-brand" href="{{ route('customers.index') }}">Customer CRUD</a>
        </div>
    </nav> -->

    <div class="container">
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
