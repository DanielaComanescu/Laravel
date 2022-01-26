@extends('layouts.base')

@section('title', 'updateTeacher')
@section('css', 'updateTeacher')

@section('content')
<div id="pgUpdateTeacher">

    <x-menu_connected /> 

    <div id="blockRight">

    <br>
        <h2> You can update teacher details here </h2>

            <form action="/updateTeacherPOST/{{ $teacher->id }}" method="POST">
            @csrf
                <div class="name">
                    <label for="name"> Update name : </label>
                    <input type="text" id="name" name="name" value="{{ $teacher->name }}">
                </div>
                <br>

                <div class="diploma">
                    <label for="diploma"> Update diploma :  </label>
                    <input type="text" id="diploma" name="diploma" value="{{ $teacher->diploma }}">
                </div>
                <br>
                <br>

                <div class="biography">
                    <label for="biography"> Update biography :  </label>
                    <textarea id="biography" name="biography" rows="5" cols="33" value="{{ $teacher->biography }}"> Up date here </textarea>
                </div>
                <br>
                <br>
                <br>

                <div class="btn">
                    <button type="submit" class="btn btn-primary"> Save changes</button>
                </div>
           
            <br>
            </form>
    </div>
</div>
@endsection