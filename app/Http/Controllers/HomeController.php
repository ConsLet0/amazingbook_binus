<?php

namespace App\Http\Controllers;

use App\Models\account;
use App\Models\ebook;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function homepage(){
        return view('home');
    }
    
    public function collectionview(){
        $data=ebook::all();
        return view('collection', compact("data"));
    }

    public function ebookmore($id){
        $data=ebook::find($id);
        return view('ebooksdetail', compact("data"));
    }

    public function about(){
        return view('aboutme');
    }

    public function profilesettings(){
        return view('dashboard');
    }

    public function adminhome(){
        $data=account::all();
        $role_id=Auth::user()->role_id;
        if($role_id=='1'){
            return view('adminpanel.adminhome');   
        }else{
            $account_id=Auth::id();
            return view('home', compact("data"));
        }
    }

    public function cart(){
        return view('cart');
    }
}
