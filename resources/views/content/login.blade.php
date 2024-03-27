@extends('layouts.app')

@section('content')

    @guest

        <div class="row d-flex hada vh-100">
            <div class="col-4 p-2">
                <img src="{{asset('images/3045584.png')}}" alt="">
            </div>
            <div class="col-4 p-2  hadi align-content-center align-items-center">
                
                <form class="p-4 my-auto rounded" id='form' method="POST" action="{{ route('login') }}">
                    @csrf
                    <h3 class="text-secondary text-center mb-4"> Connectez vous </h3>
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
                    <div class="d-flex justify-content-end ">
                        <button type="submit" class="btn btn-primary ml-auto">Connexion</button>
                    </div>
                    
                </form>
            </div>
        </div>

        <style>
            .hada{
                background: orange !important;
            }
            .hadi{
                align-items: center;
                justify-content:col
            }
        </style>

    @endguest

@endsection