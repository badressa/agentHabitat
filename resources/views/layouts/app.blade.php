
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Agent  Habitat</title>
        <!-- Styles -->
        <style>
            
            
            /*bs code */
            body{
                background-image: url('{{ asset("images/background.png") }}');
            }
            #form{
                background-color: #D4D7D9;
            }
            #agentImage{
                max-width: 80%;
            }
            #agenth_header{

            }
            #sidenav{
                border-radius: 0 2em 2em 0;
            }
            /*end of bs code */
        </style>
        @vite( 'resources/sass/app.scss', 'resources/js/app.js' )
    </head>
    <body >
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit">Logout</button>
        </form>
        <div class="container-fluid p-2 ">
            @yield('content')
        </div>
        <footer>
            @yield('footer')
        </footer>
    </body>
</html>
