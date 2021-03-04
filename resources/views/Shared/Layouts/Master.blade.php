<html>
    <head>

        <title>@yield('title')</title>

        @yield('head')

        
    </head>
    <body>
        <section id="main" role="main">
            <section class="container">
                @yield('content')
            </section>

        </section>
        <div style="text-align: center; color: white" >
        </div>

    </body>
    
</html>
