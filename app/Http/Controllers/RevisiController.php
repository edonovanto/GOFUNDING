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

    public function index(){
        // if(!Gate::allows('isKm')){
        //     abort(404,"Maaf, anda tidak memiliki akses");
        // }

        $table1 = DB::table('upload')->get();
        $table2 = DB::table('revisi_proposal')->get();

        $table3 = $table1->merge($table2);
        echo $table3;

        //return view('content.revisi_siswa');
    }

    public function form_revisi($proposalId, Upload $upload){
        $upload = $upload->where('id', $proposalId)
                        ->first();

        //echo $upload;

        //parameter dalam compact adalah variabel
        return view('content.revisi_kmtedi',compact('upload'));
    }

    public function revisi(Request $req, Revisi $revisi){
        
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
