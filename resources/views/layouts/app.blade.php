<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="/css/app.css" rel="stylesheet">
</head>

<body>
    @include('partials.navbar')
    <div class="container mx-auto">
        @yield('content')
    </div>
</body>

</html>
