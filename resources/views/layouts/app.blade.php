<!DOCTYPE html>
<html>
<head>
    <title>@yield('title', 'Contact Form')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://www.google.com/recaptcha/enterprise.js?render={{ env('GOOGLE_RECAPTCHA_KEY') }}"></script>
</head>
<body>
    <div class="container">
        @yield('content')
    </div>

    @yield('scripts')
</body>
</html>
