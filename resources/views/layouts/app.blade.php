<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Niswey Contact App')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="bg-dark text-white py-3">
        <div class="container">
            <p class="mb-0">
                <i class="bi bi-envelope"></i> Email ID: <a href="mailto:web.chaitra@gmail.com" class="text-white">web.chaitra@gmail.com</a>&nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;<i class="bi bi-phone"></i> Phone: <a href="tel:+918454099091" class="text-white">+91 8454 0990 91</a>
            </p>
        </div>
    </div>
    <div class="container mt-4">
        @yield('content')
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>