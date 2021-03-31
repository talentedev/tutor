<?php

namespace App\Http\Controllers;
use App\Models\AddCourse;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index_page()
    {
        return view('user.index');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('login');
    }

    public function show_courses()
    {
        $data = AddCourse::all();
        return view('user.show_course', compact('data'));
    }
}
