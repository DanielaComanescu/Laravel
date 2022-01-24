<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Admin;
use App\Models\Lesson;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Auth\Events\Registered;

class ConnexionController extends Controller
{ 
    public function authenticate(Request $request) {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

       
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/connectedRoute')->with('status', 'Hello');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    public function logout(Request $request) {
    Auth::logout();

    $request->session()->invalidate();

    $request->session()->regenerateToken();

    return redirect('/');
    }

    public function addUser(Request $request) {
        $user = new User;

        $credentials = $request->validate([
            'name' => ['required', 'string', 'max:30'],
            'email' => ['required', 'string','email'],
            'password' => ['required', 'string','confirmed', Rules\Password::defaults()],
            'phone_number' => ['required', 'string', 'max:20'] 
        ]);

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->phone_number = $request->phone_number;

        $user->save();
        event(new Registered($user));

        Auth::login($user);

        return redirect('/connectedRoute')->with('status', 'Welcome');

    }

    public function deleteMethod(Request $request) {
        $user = User::find($request->id);

        $user->delete();
      
        return redirect ('/');
    }

    public function saveChanges(Request $request) {
        $user = User::find($request->id);

        $user->name = $request->name;
        $user->phone_number = $request->phone_number;

        $user->save();

        return redirect('/connectedRoute')->with('status', 'Registered data');
    }


}

    
