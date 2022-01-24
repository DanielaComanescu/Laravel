@extends('layouts.base')

@section('title', 'Connected')
@section('css', 'connected')

@section('content')
<div id="pgConnected">

    <x-menu_connected />      

    <div id="blockRight">

    @if (session('status'))
        <div>
            {{ session('status') }}
        </div>
    @endif

        <h2> Account details </h2>

            <div class="infoUser">
                <div class="name">
                    <label for="name" id="name"> Your name is : {{ auth()->user()->name }} </label>
                </div>

                <div class="email">
                    <label for="email" id="email"> Your email adress is : {{ auth()->user()->email }} </label>
                </div>

                <div class="phone_number">
                    <label for="phone_number" id="phone_number"> Your phone number is : {{ auth()->user()->phone_number }} </label>
                </div>
            </div>
            
            <div class="update">
                <p>Changes to your details or do you wish to delete your account??</p>

                <p> You can update your details here </p>
                <div class="btn">
                    <a href="/update/{{ auth()->user()->id }}"> U p  D a t e</a>
                </div>
            </div>
    </div>
</div>

@endsection