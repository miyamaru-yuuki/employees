<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $table = 'Department';
    protected $guarded = array('did');
    protected $primaryKey = 'did';
    public $timestamps = false;
}