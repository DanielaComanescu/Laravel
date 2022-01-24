@extends('layouts.base')

@section('title', 'Contact Us')
@section('css', 'contactUs')

@section('content')

<div class="pgContactUs">
    <div class="left">
        <h2> CONTACT US</h2>
        <p> You can contact us for more information about our services </p>
        <p> Please use our contact details </p>
        <br>
        <br>
        <img id="image" src="https://www.annuaire-horaire.fr/adresse/fr/1787732/map.jpg">
    </div>

    <div class="right">
        <h2> Piscine intercommunale </h2>
        <br>
        <br>
        <div class="adresa">
            <img id="adress" src="https://hemiole72.files.wordpress.com/2018/04/logo-adresse.png">
            <p> 5 Avenue de Roses,  01210, Ferney-Voltaire </p>
        </div>

        <div class="telefon">
            <img id="phone" src="https://i.pinimg.com/564x/a2/95/bb/a295bb333f2bf22a43731d4997e30361.jpg">
            <p> 0456872904 </p>
        </div>

        <div class="mail">
            <img id="mail" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS6hk2kFlQsWwwJIlknqJKHD4i7ppeDtGE1nA&usqp=CAU">
            <p>contact@gmail.com </p>
    </div>
</div>
@endsection