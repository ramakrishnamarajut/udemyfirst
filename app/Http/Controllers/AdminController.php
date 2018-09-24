<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function getLogin(){
        return view('admin.login');
    }
    
    public function getLogout(){
        Auth::logout();
        return redirect()->route('admin.login');
    }

    public function getDashboard(){
        $authors = array(
            0=>array(
                'name'=>'rama Krishna',
                'password'=>'test'
                )
         );
            
        return view('admin.dashboard',['authors'=>$authors]);
    }

    public function postLogin(Request $request){
        $this->validate($request,[
            'username'=>'required',
            'password'=>'required'
        ]);
        
        if(!Auth::attempt(['name'=>$request['username'], 'password' => $request['password']])){
            return redirect()->back()->with(['fail' => 'could not log you']);
        }
        return redirect()->route('admin.dashboard');
    }
}
