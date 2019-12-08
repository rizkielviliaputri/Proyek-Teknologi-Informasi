<?php

namespace App\Http\Controllers;
use App\peserta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InputController extends Controller
{
   public function input_data(){
		return view('input_data');
	}
 
	public function proses_input(Request $request){
    peserta::create([
        'user_id' => Auth::id(),
        'namapeserta' => $request->input('namapeserta'),
        'tempatlahir' => $request->input('tempatlahir'),
        'tanggallahir' => $request->input('tanggallahir'),
        'alamat' => $request->input('alamat'),
        'notelepon' => $request->input('notelepon'),
        'asalsekolahuniv' => $request->input('asalsekolahuniv'),
    ]);
  
 
    return redirect()->to('/upload');
	}
}
   
   

    