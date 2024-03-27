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
            /*end of bs code */
        </style>
        @vite( 'resources/sass/app.scss', 'resources/js/app.js' )
    </head>
    <body >
        <div class="container-fluid p-2 ">
            <div class="row">
                <div class="col-4 p-2">
                    <img src="{{asset('images/3045584.png')}}" alt="">
                </div>
                <div class="col-4 p-2 align-content-center align-items-center">
                    
                    <form class="p-4 my-auto rounded" id='form' method="POST" action="{{ route('login') }}">
                        @csrf
                        <h3 class="text-secondary text-center"> Connectez vous </h3>
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label text-secondary">Nom d'utilisateur</label>
                          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                          <div id="emailHelp" class="form-text ">ecritutre</div>
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputPassword1" class="form-label text-secondary">Mot de passe </label>
                          <input type="password" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3 form-check d-flex justify-content-end">
                            <a href="">mot de passe oublié</a>
                        </div>
                        <div>
                         
                        </div>
                        <div class="d-flex justify-content-end ">
                            <button type="submit" class="btn btn-primary ml-auto">Connexion</button>
                        </div>
                        
                      </form>
                    
                </div>
            </div>
        </div>
    </body>
</html>


<!--div className="bg-gray-50 text-black/50 dark:bg-black dark:text-white/50">
          
    <div class="relative min-h-screen flex flex-col items-center justify-center selection:bg-[#FF2D20] selection:text-white">
        <div class="relative w-full max-w-2xl px-6 lg:max-w-7xl">
            <header class="grid grid-cols-2 items-center gap-2 py-10 lg:grid-cols-3">
                @if (Route::has('login'))
                    <nav class="-mx-3 flex flex-1 justify-end">
                        @auth
                            <a
                                href="{{ url('/dashboard') }}"
                                class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                            >
                                Dashboard
                            </a>
                        @else
                            <a
                                href="{{ route('login') }}"
                                class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                            >
                                Log in
                            </a>

                            @if (Route::has('register'))
                                <a
                                    href="{{ route('register') }}"
                                    class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                >
                                    Register
                                </a>
                            @endif
                        @endauth
                    </nav>
                @endif
            </header>

            <main class="mt-6">
        
            </main>

            <footer class="py-16 text-center text-sm text-black dark:text-white/70">
               
            </footer>
        </div>
    </div>
</div -->