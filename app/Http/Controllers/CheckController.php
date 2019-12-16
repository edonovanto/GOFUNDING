<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Terima;
use App\models\Upload;
use Second;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class CheckController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $req){

        $search = $req->search;

        $upload = Db::table('upload')
                    ->where('judul', 'LIKE', '%'.$search.'%')
                    ->paginate(10);

        return View('content.check',['upload' => $upload]);
    }

    public function check(){
    	$downloads=DB::table('upload')->get();
    	return view('content.check',compact('upload'));
    }   

    public function accept(){
        $row = Terima::all();
        return view('content.proposal_diterima',['terima'=>$row]);
    }

    public function terima($proposalId, Upload $upload){
        $row = Upload::all();
        $terima = $row->where('id', $proposalId)->first();
        
        $a = $terima->judul;
        $b = $terima->jumlah;
        $c = $terima->file_proposal;

        $terima2 = new Terima();
        $terima2->judul = $a;
        $terima2->jumlah = $b;
        $terima2->file_proposal = $c;
        
        $terima2->save();

        return Redirect::to('checks');
    }


}
