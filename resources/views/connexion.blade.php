@extends('layouts.base')

@section('title', 'Register')
@section('css', 'connexion')

@section('content')
<div id="pgConnexion">

    <div id="rightBlock">
        <div class="connexionForm">
            <br>
            <br>
            <h2> Log in </h2>
            <br>

            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            @endif
                
            <form action="/connexionForm" method="POST"> 
            @csrf
                <div class="email">
                    <label for="email"> Your email address </label>
                        <input type="text" id="email" name="email" value="daniela@gmail.com" required>
                </div>
                <br>
                    
                <div class="password">
                    <label for="password"> Your password </label>
                        <input type="password" id="password" name="password" value="123456789" required>
                </div>
                <br>
                
                <div class="button">
                    <button type="submit" class="btn btn-primary"> Log in </button>
                </div>
                <br>
                
                <br>
                <div class="inscription">
                    <p> You don't have an account yet? </p>
                    <a href="/register"> Create an account </a>
                </div>      
            </form>
        </div>
    </div>

</div>
@endsection
