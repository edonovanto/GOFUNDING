<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Revisi extends Model
{
    protected $table = "revisi_proposal";

    protected $fillable=['message','revisi_proposal'];
}