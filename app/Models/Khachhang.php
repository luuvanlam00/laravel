<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Khachhang extends Model
{
    protected $table='khachhang';
    protected $primaryKey='id_kh';
    public $timestamps = false;
    protected $guarded=[];
}
