<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cate extends Model
{
    protected $table='loaisp';
    protected $primaryKey='maloai';
    public $timestamps = FALSE;
    protected $guarded=[];
}
