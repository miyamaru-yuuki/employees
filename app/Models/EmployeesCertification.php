<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EmployeesCertification extends Model
{
    protected $table = 'EmployeesCertification';
    protected $guarded = array('ecid');
    protected $primaryKey = 'ecid';
    public $timestamps = false;
}