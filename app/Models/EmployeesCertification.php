<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EmployeesCertification extends Model
{
    protected $table = 'EmployeesCertificationController';
    protected $guarded = array('ecid');
    protected $primaryKey = 'ecid';
    public $timestamps = false;
}