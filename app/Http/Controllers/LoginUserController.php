<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use App\Models\Admin;

class LoginUserController extends Controller{
    public function loginuser(){
        if(Auth::check()){
            return redirect('home');
        }else{
            return view('layout/loginuser');
        }
    }
    public function actionlogin1(Request $request){
        $nama=$request->input('nama');
        $password=$request->input('password');
        $user=Admin::where('nama',$nama)
                    ->where('password',$password)
                    ->first();
                    if($user){
                        Auth::login($user);
                        return redirect('home');
                    }else{
                        Session::flash('error','Nama atau Password Salah');
                        return redirect('/');
                    }
    }
    public function actionlogout1(){
        Auth::logout();
        return redirect('/');
    }
}