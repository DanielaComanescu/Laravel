@extends('layouts.base')

@section('title', 'Prices&Calendar')
@section('css', 'prices')

@section('content')
<div class="pgPrices">
    <div class="left">
        <h2> Piscine intercommunale </h2>
        <p> Covid 2G certificate required for access to our pools (no test allowed) </p>
        <img id="pool" src="https://www.ville-chambray-les-tours.fr/wp-content/uploads/2021/06/IMG_20200708_144248-scaled-e1624548880861-985x630.jpg">
    
        <div class="cost">
            <div class="big">
                <img id="cost" src="https://webshopedia.dk/wp-content/uploads/2020/06/price-image.png">
                <h4> Admission fees </h4>
            </div>
            <p> Normal Price £4,80</p>
            <p> Discount group £3,40</p>

            <div class="big">
                <img id="cost" src="https://webshopedia.dk/wp-content/uploads/2020/06/price-image.png">
                <h4> Lessons price per term</h4>
            </div>
            <p> We have 12 lessons in one term. The next term starts on the 10th of January until the 10th of April</p>
            <p> The full price for all 12 lessons (onece a week) is £480 </p>
            <p> If you would like to learn how to swim in a friendly environment and with dedicated teachers, <a href="/connexion">Click on register </a></p>
        </div>
    </div>

    <div class="right">
        <br>
        <br>
        <br>
        <br>
        <br>
        <div class="orar">
            <img id="orar" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSGkk9jaJd8uJzjlW72KZR8kc37pHsH88mYnw&usqp=CAU">
            <div class="pColumn">
                <p> Monday 4:30pm - 8pm </p>
                <p> Tuesday 4:30pm - 8pm </p>
                <p> Wednesday 3pm - 8pm </p>
                <p> Thursday Closed </P>
                <p> Friday 4:30pm - 8 pm </p>
                <p> Saturday 8am - 4:30pm </p>
                <p> Sunday 8am - 1pm </p>
            </div>
        </div>
        
    </div>
</div>
@endsection
