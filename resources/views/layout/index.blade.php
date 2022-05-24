
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Auto_mail</title>
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
</head>
<body>
    <div class="header">
    @include('/includes.header')
    </div>
    <div id="content_container">
        <div class="slide-bar">  
        @include('/includes.slidebar')  
        </div>
        <div class="content">
            @yield('content_main')
        </div>
    </div>
</body>
</html>