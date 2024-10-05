<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha384-DyZ1QmD9V1C1W0gFvW+nK+NWUxd9Ltr6wU+P3d/A5y1N9tO7C/bHsqK1OhuA8Yj" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>@yield('title', 'Mon Application')</title>
</head>
<body>
    <div class="container mt-4">
        @yield('content')
    </div>
</body>
</html>
