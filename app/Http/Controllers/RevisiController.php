<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Upload;
use App\models\Revisi;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class RevisiController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $req){
        $upload = Db::table('revisi_proposal')
                    ->paginate(10);


        return view('content.revisi_siswa',['upload' => $upload]);
    }
    
    public function form_revisi($proposalId, Upload $upload){
        $upload = $upload->where('id', $proposalId)
                        ->first();

        //echo $upload;

        //parameter dalam compact adalah variabel
        return view('content.revisi_kmtedi',compact('upload'));
    }

    public function check(){
    	$downloads=DB::table('revisi_proposal')->get();
    	return view('content.check',compact('upload'));
    }   

    // public function form_revisi($proposalId, Upload $upload){
    //     $upload = $upload->where('id', $proposalId)
    //                     ->first();

    //     //echo $upload;

    //     //parameter dalam compact adalah variabel
    //     return view('content.revisi_kmtedi',compact('upload'));
    // }

    public function revisi(Request $req){
        $validate = Validator::make($req->all(),
        [
            // 'message' => 'required',
            'revisi_proposal' => 'required'
        ]);
        if($validate->fails()){
            return redirect()->route('check')
                             ->withErrors($validate)
                             ->withInput();
        }
        else {
            $path = $req->revisi_proposal;
            $nama_proposal = time().".".$path->extension();
            $tujuan_upload = 'revisi';
            $path->move($tujuan_upload,$nama_proposal);
            Revisi::create([
                'judul' => $req->judul,
                'message' => $req->message,
                'revisi_proposal' => $nama_proposal
            ]);
            $notification = array(
                'message' => 'Revisi berhasil dikirim',
                'alert-type' => 'success'
            );    
            
            return Redirect::to('check')->with($notification);

    }
}
}
