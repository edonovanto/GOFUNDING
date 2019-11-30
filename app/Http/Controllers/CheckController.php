<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Upload;
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


    // public function check($id){
    //     $file = Download::find($id);
    //     return Storage::download($file->path,$file->id);
    // }

}
