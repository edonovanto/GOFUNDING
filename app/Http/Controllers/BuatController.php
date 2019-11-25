<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Upload;
use Illuminate\Support\Facades\Redirect;

class BuatController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        return view('content.buat_proposal');
    }

    public function upload(Request $req, Upload $upload){
        $upload->judul = $req->judul;
        $upload->jumlah = $req->jumlah;
        $upload->jumlah = $req->jumlah;
        $upload->save();

        return redirect()->route('buat');
    }
}
