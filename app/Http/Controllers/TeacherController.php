<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;

class TeacherController extends Controller
{
    public function listTeachers() {
        $teachers = Teacher::all(); 
        return view ('teachers', ['teachers' => $teachers]);
    }

    public function updateTeacher($id) {
        $teacher = Teacher:: findOrFail($id);

        return view('updateTeacher', ['teacher' => $teacher]);
    }
    
    public function saveChangesTeacher(Request $request) {
        $teacher = Teacher::find($request->id);

        $teacher->name = $request->name;
        $teacher->diploma = $request->diploma;
        $teacher->biography = $request->biography;

        $teacher->save();

        return redirect('/teachers')->with('status', 'Registered data');
    }

    public function destroy(Request $request) {
        $teacher = Teacher::find($request->id);
        
        $teacher->delete();
        return redirect('/teachers');
    }

    public function create() {
        return view('createTeacher');
    }

    public function saveTeacher(Request $request) {
        $teacher = new Teacher;

        $teacher->name = $request->name;
        $teacher->diploma = $request->diploma;
        $teacher->biography = $request->biography;

        $teacher->save();

        return redirect('teachers')->with('status', 'New teacher has been added');
    }

}
