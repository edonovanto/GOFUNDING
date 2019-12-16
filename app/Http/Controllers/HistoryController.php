<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\models\Upload;
use Illuminate\Support\Facades\DB;

class HistoryController extends Controller
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

        return view('content.history_proposal',['upload' => $upload]);
    }
  
    public function editProposal($proposalId, Upload $upload){
        $upload = $upload->where('id', $proposalId)
                         ->first();

        return view('content.edit_proposal', compact('upload'));
    }

    public function uploadEditProposal(Request $request, Upload $upload){
        $up = $upload::find($request->id);
        $up->judul = $request->judul;
        $up->jumlah = $request->jumlah;
        $up->file_proposal = $request->file_proposal;
        $up->save();
    	return Redirect::to('histori');
    }

    public function hapusProposal($proposalId, Upload $upload){
        $upload->where('id', $proposalId)
                         ->delete();
        
        return Redirect::to('histori');
        //return view('content.edit_proposal', compact('upload'));
    }
}
