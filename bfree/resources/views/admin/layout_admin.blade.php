<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>B-Free Studio</title>
 
        <!-- Styles -->
        <link href="{{ url('/bootstrap/css/bootstrap.css') }}" rel="stylesheet">
        <link href="{{ url('/css/css_admin.css') }}" rel="stylesheet">

    </head>
    <body>
        <div class="container-fluid">

                @include('admin.menu_superior')
                
            <div class="container">
                @include('admin.menu_lateral')
                
                <div class="main">
                    @yield('content')
                </div>
                
                
            </div>
            


        </div>
        

        



        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script type="text/javascript"  href="{{ url('/bootstrap/js/bootstrap.js') }}"></script>
      

    </body>
</html>
