<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Upload extends Model
{
    protected $table = "upload";

    protected $fillable=['id','judul','jumlah','file_proposal'];
}
