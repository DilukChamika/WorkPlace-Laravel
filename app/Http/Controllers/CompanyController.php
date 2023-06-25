<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;
use Illuminate\Support\Facades\Auth;

class CompanyController extends Controller
{
    public function logout(){
        Auth::guard('company')->logout();
        return redirect('/login');
    }
}
