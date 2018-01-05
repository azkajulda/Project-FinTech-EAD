<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\myTabungan;
use\DB;

class myTabunganController extends Controller
{
    public function tampil()
    {
        $tabung = DB::table("t_mytabung")->get();
    	$jumlah = DB::table("t_mytabung")
    	->select(DB::raw('SUM(jumlah) as total'))
    	->get();
    	return view('Sub_menu.myTabungan', compact("tabung","jumlah"));
    }

    public function tambah(Request $request)
    {
    	try {
    		$tabung = new myTabungan;
    		$tabung->keterangan = $request->input("keterangan");
    		$tabung->jumlah = $request->input("jumlah");
    		$tabung->save();
    		return redirect('/myTabungan');
    	} catch (Exception $e) {
    		dd($e);
    	}
    }


    
}
