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

    public function index(){
        $upload = Db::table('upload')->get();

        foreach($upload as $row){
            echo $row->judul. "<br>";
        }

        return view('content.history_proposal',['upload' => $upload]);
    }
}
