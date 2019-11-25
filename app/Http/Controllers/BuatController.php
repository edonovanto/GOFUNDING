<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Upload;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

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

        $validate = Validator::make($req->all(),
        [
            'judul' => 'required',
            'jumlah' => 'required',
            // 'file_proposal' => 'required'
        ]
        );

        if($validate->fails()){
            return redirect()->route('buat')
                             ->withErrors($validate);
        }
        else {
            $upload->judul = $req->judul;
            $upload->jumlah = $req->jumlah;
            $upload->save();
    
            return redirect()->route('buat');
        }

    }
}
