<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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

    public function hapusProposal($proposalId, Upload $upload){
        $upload->where('id', $proposalId)
                         ->delete();

        return view('content.edit_proposal', compact('upload'));
    }
}
