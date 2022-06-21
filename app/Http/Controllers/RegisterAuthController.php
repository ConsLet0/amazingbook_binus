<?php

namespace App\Http\Controllers;

use App\Models\account;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class RegisterAuthController extends Controller
{
    public function create(){
        return view('auth.register');
    }
    
    public function store(Request $request){
        $validatedData = $request->validate([
            'first_name' => 'required|regex:/^[a-zA-Z\s]+$/|max:25',
            'middle_name' => 'required|regex:/^[a-zA-Z\s]+$/|max:25',
            'last_name' => 'required|regex:/^[a-zA-Z\s]+$/|max:25',
            'email' => 'required|unique:users|email:dns',
            'gender_id' => 'required',
            'role_id' => 'required',
            'image' => 'required|mimes:jpg,png,jpeg,gif,svg',
            'password' => 'required|min:8|regex:/^(?=.*[a-zA-Z\s])(?=.*\d).+$/'
        ]);
        

        $imageData = $validatedData['image'];
            $imageName = time().'.'.$imageData->getClientOriginalName();
            Storage::putFileAs('public/ProfilePicture',$imageData,$imageName);            
            $validatedData['image']=$imageName;

        $validatedData['password'] = Hash::make($validatedData['password']);

        account::create($validatedData);
        return redirect('/login')->with('registerSuccess','The Registration Was Successfull ! Please Login');
    }
    
}
