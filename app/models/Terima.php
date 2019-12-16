<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Terima extends Model
{
    protected $table = "terima_proposal";

    protected $fillable=['id','judul','jumlah','file_proposal'];
}
