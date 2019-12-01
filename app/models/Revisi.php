<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Revisi extends Model
{
    protected $table = "revisi_proposal";

    protected $fillable=['judul','message','revisi_proposal'];
}