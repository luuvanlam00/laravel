<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NccModel extends Model
{
    protected $table='ncc';
    protected $primaryKey='mancc';
    public $timestamps=false;
    protected $guarded=[];
}
