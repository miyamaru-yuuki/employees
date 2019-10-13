<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Certification extends Model
{
    protected $table = 'certification';
    protected $guarded = array('cid');
    protected $primaryKey = 'cid';
    public $timestamps = false;
}