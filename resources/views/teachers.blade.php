@extends('layouts.base')

@section('title', 'Teachers')
@section('css', 'teachers')

@section('content')

<div class="pgTeachers">

    <x-menu_connected /> 

    <div id="blockRight">

        <h1> Meet our team </h1>

        <h3>Here you can add a teacher : <a class="btn" id="crud" href="/addTeacher">Add New Teacher </a></h3>

        <table>
            <thread>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Qualifications</th>
                    <th scope="col">Biography</th>
                    <th scope="col">Update</th>
                    <th scope="col">Delete</th>
                </tr>
            </thread>

            <tbody>
                @foreach ($teachers as $teacher)

                <tr>
                    <td> {{ $teacher->name }} </td>
                    <td> {{ $teacher->diploma }} </td>
                    <td> {{ $teacher->biography }}</td>
                    <td> <div class="btn" id="crud">
                        <a href="/updateTeacher/{{ $teacher->id }}"> Up Date</a>
                        </div> 
                    </td> 
                    <td> <div class="btn" id="crud">
                        <a href="/deleteTeacher/{{ $teacher->id }}"> Delete</a>
                        </div> 
                    </td>            
                </tr>
                @endforeach
            
            </tbody>
        </table>
    </div>
</div>

@endsection

