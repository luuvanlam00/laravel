<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table='sanpham';
    protected $primaryKey='masp';
    public $timestamps=false;
    protected $guarded=[];
}
