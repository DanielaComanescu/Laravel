@extends('layouts.base')

@section('title', 'LessonsSpots')
@section('css', 'lessonsSpots')

@section('content')

<div class="pglessonsSpots">   
    
    <x-menu_connected /> 

    <div id="blockRight">
        <h1>Book your lesson now</h1>

        <table>
            <thread>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">STATUS</th>
                    <th scope="col">LEVEL</th>
                    <th scope="col">TIME</th>
                    <th scope="col">BOOK THIS SPOT</th>
                </tr>
            </thread>

            <tbody>
                @foreach ($lessons as $lesson)

                <tr>
                    <td> {{ $lesson->id }} </td>
                    <td> {{ $lesson->status}} </td>
                    <td> {{ $lesson->name_level }} </td>
                    <td> {{ $lesson->time }} </td>
                    <td> <div class="btn"><a href="/book"> Book spot </a></div></td>
                </tr>
                @endforeach

            </tbody>
        </table>
    </div id="blockRight">
</div>

@endsection