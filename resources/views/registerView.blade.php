@extends('layouts.base')

@section('title', 'New registration')
@section('css', 'register')

@section('content')
<div class="pgRegister">

    <br>
    <div id="haveAccount">
        <a href="/connexion"> Already have an account?</a>
    </div>

    <h2> REGISTER WITH US </h2>

    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    @endif

        <form action="/registerForm" method="POST"> 
        @csrf
            <div class="name">
                <label for="name"> Your name </label>
                    <input type="text" id="name" name="name" required>
            </div>
            <br>
            <br>

            <div class="email">
                <label for="email"> Your email adress </label>
                    <input type="text" id="email" name="email" required>
            </div>
            <br>
            <br>

            <div class="password">
                <label for="password"> Your password </label>
                    <input type="password" id="password" name="password" required>
            </div>
            <br>
            <br>

            <div class="confirmPassword">
                <label for="confirmPassword"> Confirm password </label>
                    <input type="password" id="confirmPassword" name="password_confirmation" required>
            </div>
            <br>
            <br>

            <div class="phone_number">
                <label for="phone_number"> Your phone number </label>
                    <input type="text" id="phone_number" name="phone_number" required>
            </div>
            <br>
            <br>

            <div id="button">
                <button type="submit" class="btn btn-primary"> Register here</button>
            </div>
        </form>
</div>
@endsection