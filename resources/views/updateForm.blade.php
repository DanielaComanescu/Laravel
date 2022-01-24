@extends('layouts.base')

@section('title', 'updateForm')
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

    <br>
        <h2> You can update your details here </h2>

            <form action="/updatePOST/{{ auth()->user()->id }}" method="POST">
            @csrf
                <div class="name">
                    <label for="name"> Update your name : </label>
                    <input type="text" id="name" name="name" value="{{ auth()->user()->name }}">
                </div>
                <br>

                <div class="phone_number">
                    <label for="phone_number"> Update your phone number :  </label>
                    <input type="text" id="phone_number" name="phone_number" value="{{ auth()->user()->phone_number }}">
                </div>
                <br>
                <br>

                <div class="btn">
                    <button type="submit" class="btn btn-primary"> Save changes</button>
                </div>
            
                <br>

                <div class="delete">
                    <p> Delete your account </p>
                        <div class="btn">
                            <form action="/delete/{{ auth()->user()->id }}" method="POST">
                            @csrf
                                <button type="submit" class="btn btn-primary"> Delete</button>
                            </form>
                        </div>
                </div>
            </form>
    </div>
</div>
@endsection