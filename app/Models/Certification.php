<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Certification extends Model
{
    protected $table = 'Certification';
    protected $guarded = array('cid');
    protected $primaryKey = 'cid';
    public $timestamps = false;
}