<?php

namespace App\Http\Controllers;
use App\pelatihan;
use App\peserta;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function upload(){
		$pelatihan = pelatihan::get();
		return view('upload',['pelatihan' => $pelatihan]);
	}
 
	public function proses_upload(Request $request){
		$this->validate($request, [
			'pilihanpelatihan' => 'required',
			'banktujuan' => 'required',
			'file' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
			'keterangan' => 'required',
		]);
	 
		// menyimpan data file yang diupload ke variabel $file
		$file = $request->file('file');
	 
		$nama_file = time()."_".$file->getClientOriginalName();
	 
			  // isi dengan nama folder tempat kemana file diupload
		$tujuan_upload = 'data_file';
		$file->move($tujuan_upload,$nama_file);
	 
	 
		pelatihan::create([
			'pilihanpelatihan' => $request->pilihanpelatihan,
			'banktujuan' => $request->banktujuan,
			'file' => $nama_file,
			'keterangan' => $request->keterangan,
		]);
	 
		return redirect()->to('/selesaidaftar');
	
	}
	public function show(){
		$pelatihan = pelatihan::all();
		$peserta = peserta::all();
		return view('show',['pelatihan' => $pelatihan], ['peserta' => $peserta]);
	}

	public function selesaidaftar(){
		return view('selesaidaftar');
	}
}
