<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="{{ asset('css/common.css') }}" rel="stylesheet">
</head>

<body>
    <div class="container">
        <div class="page-lock">
            <div class="page-body">
                <div class="lock-head">
                    @yield('title')
                </div>
                <div class="lock-body">
                    @yield('content')
                </div>
                <div class="lock-bottom">
                    <a href="/">MENU</a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>