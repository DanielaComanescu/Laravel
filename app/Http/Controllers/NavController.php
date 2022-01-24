<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Lesson;
use App\Models\Admin;
use App\Models\Teacher;

use Illuminate\Http\Request;

class NavController extends Controller
{
    public function welcome() {
        return view('welcome');
    }

    public function priceAndCalendar() {
        return view('prices');
    }

    public function swimLessons() {
        return view('swimLessons');
    }

    public function connexion() {
        return view('connexion');
    }

    public function connected() {
        return view('connected');
    }

    public function registerMethod() {
        $users = User::all();

        return view('registerView', ['users' => $users]);
    }

    public function updateData($id) {
        $user = User:: findOrFail($id);

        return view('updateForm', ['user' => $user]);
    }

    public function contact() {
        return view('contactUs');
    }

    public function listLessons() {
        $lessons = Lesson::all(); //pour recuperer toutes les leçons
        return view ('lessonsSpots', ['lessons' => $lessons]);
    }

}
