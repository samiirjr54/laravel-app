
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>app blade</title>
</head>
<body>
    <h1>Header</h1>

        <div>
            @yield('sidebar')
            @yield('content')
        </div>

    <h1>Footer</h1>
</body>
</html>