@extends('layouts.base')

@section('title', 'Add Teacher')
@section('css', 'teachers')

@section('content')

<div class="pgCreateTeacher">

    <x-menu_connected /> 

    <div id="blockRight">
        <h1>Add new teacher in the data base </h1>

        <form action="/addTeacherPost" method="POST">
        @csrf 
            <div class="name">
                <label for="name">First and last name </label>
                    <input type="text" id="name" name="name">
            </div>
            <br>
            <br>

            <div class="diploma">
                <label for="diploma"> Qualifications and diploma </label>
                    <input type="text" id="diploma" name="diploma">
            </div>
            <br>
            <br>

            <div class="biogryphy">
                <label for="biography"> Enter a short biography </label>
                    <textarea id="biography" name="biography" rows="5" cols="33"> Type info here </textarea>
            </div>
            <br>
            <br>

            <div id="button">
                <button type="submit" class="btn btn-primary"> Save </button>
            </div>
        </form>
    </div>
</div>

@endsection
