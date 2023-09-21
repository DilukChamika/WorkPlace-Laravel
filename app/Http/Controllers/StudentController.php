<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Support\Facades\Auth;
use App\Models\Company;
use App\Models\Vacancy;
use App\Models\Message;
use App\Models\StudentFavorite;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

class StudentController extends Controller
{
     function logout(){
        Auth::guard('student')->logout();
        return redirect('/login');
    }

    function StuFeed(){

        $vacancies = Vacancy::get();
        return view('Student.Feed', compact('vacancies'));
    }

    function AboutMe(){
        $user = Auth::guard('student')->user();
        return view('Student.AboutMe', compact('user'));
    }

    function EditStudentData(Request $request){
        $student = Auth::guard('student')->user();
        $this->validate($request,[
            'firstname' => 'required',
            'lastname' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'university' => 'required',
            'degree' => 'required',
            'email' => ['required', 'email'],
            'linkedIn' => 'required',
            'profilePicture' =>  ['required', 'image', 'mimes:jpg,png,jpeg', 'max:2048']
        ],[
            'firstname.required' => 'Enter your first name.',
            'lastname.required' => 'Enter your last name.',
            'address.required' => 'Enter your home address.',
            'email.required' => 'Enter your email address.',
            'phone.required' => 'Enter your contact phone number.',
            'university.required' => 'Enter universities you attended.',
            'degree.required' => 'Enter your degree qualifications.',
            'linkedIn.required' => 'Enter your degree qualifications.',
            'profilePicture.max' => 'The Profile picture image size may not be greater than 2MB.',
            'profilePicture.mimes' => 'The Profile picture image must be a .jpg .png or .jpeg file.'
        ]);

        $filePath = 'storage/' . $student->profilePic;
        File::delete($filePath);

        $student->firstname = $request->firstname;
        $student->lastname = $request->lastname;
        $student->university = $request->university;
        $student->address = $request->address;
        $student->email = $request->email;
        $student->tel = $request->phone;
        $student->degree = $request->degree;
        $student->linkedin = $request->linkedIn;
        $student->profilePic = $request->file('profilePicture')->store('StudentProfilePictures','public');

        $student->save();
        return redirect('Student/feed')->with('message', 'Your Student Details Updated Successfully!');

    }

    function DeleteMyAccount (){
        $student = Auth::guard('student')->user();
        $filePath = 'storage/' . $student->profilePic;
        File::delete($filePath);
        $student->delete();
        return redirect()->route('login')->with('success', 'Your account has been deleted.');
    }

    function AddToFav(Request $request){
        $student_id = Auth::guard('student')->user()->id;
        $vacancy_id = $request->get('vacancy_id');

        $exists = StudentFavorite::where('student_id', $student_id)
                ->where('post_id', $vacancy_id)
                ->exists();

        if($exists){
            return redirect('Student/feed')->with('message', 'This vacancy already added to favorites!');
        }else{
            $favorite = new StudentFavorite();
            $favorite->student_id = $student_id;
            $favorite->post_id = $vacancy_id;
            $favorite->save();
            return redirect('Student/feed');
        } 
    }

    function Favorite(){
        $student_id = Auth::guard('student')->user()->id;

        $favoriteVacancies = Vacancy::join('student_favorites', 'vacancies.id', '=', 'student_favorites.post_id')
            ->where('student_favorites.student_id', $student_id)
            ->select('vacancies.*') 
            ->get();
        
        return view('Student.favorite', compact('favoriteVacancies'));
    }

    function Removefavorite(Request $request){
        $student_id = Auth::guard('student')->user()->id;
        StudentFavorite::where('student_id', $student_id)
        ->where('post_id', $request->vacancy_id)
        ->delete();
        return redirect('Student/favorite');
    }


}
