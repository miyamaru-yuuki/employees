<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employees extends Model
{
    protected $table = 'Employees';
    protected $guarded = array('eid');
    protected $primaryKey = 'eid';
    public $timestamps = false;
}