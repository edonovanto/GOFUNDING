<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Download extends Model
{
    protected $table = "upload";

    protected $fillable=['id','judul','jumlah','file_proposal'];
}