<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Support\Facades\Auth;

class StudentController extends Controller
{
     function logout(){
        Auth::guard('student')->logout();
        return redirect('/login');
    }
}
