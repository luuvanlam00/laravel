<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table='binhluan';
    protected $primaryKey='id_bl';
    public $timestamps=false;
    protected $guarded=[];
}
