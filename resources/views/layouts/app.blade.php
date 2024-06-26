

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="img/Tspk-logo.png" type="image/x-icon">
    <title>@yield('title-block')</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    @vite(['resources/scss/app.scss', 'resources/css/app.css',
     'resources/css/style.css',
      'resources/js/loader.js',
       'resources/js/app.js',
        'resources/js/anim.js',
         'resources/js/hmain.js',
          'resources/js/scrollMain.js',
           'resources/js/form.js',
            'resources/js/index-main.js',
             'resources/js/jquery-3.6.4.min.js',
             'resources/js/popup.js',
             ])
</head>
<body class="">
    <!-- <div class="preloader" id="preloader">
        <div class="load__elem"></div>
    </div> -->

    
    @yield('content')
    @yield('login')
     
    


    @yield('reg')
    @yield('event')

    @yield('news')
    @yield('info')
    @yield('profile')
    @yield('members')
    @yield('profile')
    @yield('new')
    @yield('footer')
    @yield('event-create')
    @yield('info-event')
    
    
    
    
</body>

</html>

