<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
//use App\Models\Certification;
use App\Models\EmployeesCertification;

class EmployeesCertificationController extends Controller
{
    public function index($eid)
    {
        $employeesCertification = new EmployeesCertification();
        $cid= $employeesCertification->where('eid',$eid)->get();

        dd($cid);

        //return view('department.index',['departmentList' => $departmentList]);
    }
}
