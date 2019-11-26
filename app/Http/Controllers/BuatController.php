<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Upload;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;

class BuatController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        if(!Gate::allows('isSiswa')){
            abort(404,"Maaf, anda tidak memiliki akses");
        }

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
                             ->withErrors($validate)
                             ->withInput();
        }
        else {
            $upload->judul = $req->judul;
            $upload->jumlah = $req->jumlah;
            $upload->save();
    
            return redirect()->route('buat');
        }

    }
    
    public function editProposal($proposalId, Upload $upload){
        $upload = $upload->where('id', $proposalId)
                         ->first();

        return view('content.buat_proposal', ['upload' => $upload]);
    }
}
