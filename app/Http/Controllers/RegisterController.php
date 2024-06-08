<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Admin;

class RegisterController extends Controller{
    public function index(){
            return view('layout/register');
    }
    public function process(Request $request){
      Admin::create($request->all());
      return redirect()->route('login');
    }
}