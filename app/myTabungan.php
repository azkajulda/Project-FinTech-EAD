<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class myTabungan extends Model
{
    protected $table = 't_mytabung';
    protected $fillable = ['id','keterangan','jumlah','created_at','updated_at'];
}
