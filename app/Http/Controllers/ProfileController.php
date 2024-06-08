<?php

namespace App\Http\Controllers;
use App\Models\Profil;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
    public function index()
    {
    	// mengambil data dari table pegawai
        $profil = Profil::with('Admin')->get();
    	// mengirim data pegawai ke view index
    	return view('layout/profil',compact('profil'));
 
    }

    public function tambahprofil()
    {
    	// mengambil data dari table pegawai
    	
        $admin=Admin::all();
    	// mengirim data pegawai ke view index
    	return view('layout/tambahprofil',compact('admin'));
 
    }

    public function insertdata1(Request $request)
    {
       
       
        
        // mengambil data dari table pegawai
    	Profil::create($request->all());
        
    	// mengirim data pegawai ke view index
    	return redirect()->route('profil');
 
    }

    public function ubahprofil($id_profil)
    {
    	// mengambil data dari table pegawai
        $profil = Profil::find($id_profil);
        $admin=Admin::all();
 
    	// mengirim data pegawai ke view index
    	return view('layout/ubahprofil',compact('profil','admin'));
 
    }

    public function updatedata1(Request $request, $id_profil)
    {
    	// mengambil data dari table pegawai
        $profil = Profil::find($id_profil);
        $profil->update($request->all());
        
    	// mengirim data pegawai ke view index
    	return redirect()->route('profil');
 
    }

    public function deleteprofil($id_profil)
    {
    	// mengambil data dari table pegawai
        $profil = Profil::find($id_profil);
        $profil->delete();
        
    	// mengirim data pegawai ke view index
    	return redirect()->route('profil');
 
    }

   
}
