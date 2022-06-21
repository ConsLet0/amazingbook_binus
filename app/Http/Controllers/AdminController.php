<?php

namespace App\Http\Controllers;

use App\Models\account;
use App\Models\ebook;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function userview(){
        $data=account::all();
        return view('adminpanel.usermanagement', compact("data"));
    }

    public function deleteuser($id){
        $data=account::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function newebooks(){
        return view('adminpanel.addebooks');
    }

    public function postebooks(Request $request){
        $data=new ebook();
        $data->title = $request->title;
        $data->author = $request->author;
        $data->description = $request->description;
        $data->save();
        return redirect()->back();
    }

    public function ebookcollection(){
        $data=ebook::all();
        return view('adminpanel.viewebooks', compact("data"));
    }

    public function deleteebooks($id){
        $data=ebook::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function updateoldebooks($id){
        $data=ebook::find($id);
        return view("adminpanel.updateebook", compact("data"));
    }

    public function updatenewebooks(Request $request, $id){
        $data=ebook::find($id);
        $data->title = $request->title;
        $data->author = $request->author;
        $data->description = $request->description;
        $data->save();
        return redirect()->back();  
    }

    public function newroles($id){
        $data=account::find($id);
        return view("adminpanel.updaterole", compact("data"));
    }

    public function updatenewroles(Request $request, $id){
        $data=account::find($id);
        $data->role_id = $request->role_id;
        $data->save();
        return redirect('/usermanagement');
    }
}
