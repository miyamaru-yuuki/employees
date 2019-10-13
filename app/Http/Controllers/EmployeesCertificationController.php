<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use App\Models\Employees;
use App\Models\Certification;
use App\Models\EmployeesCertification;

class EmployeesCertificationController extends Controller
{
    public function index($eid)
    {
        $employees= new Employees();
        $employeesData = $employees->find($eid);

        $employeesCertification = new EmployeesCertification();
        $employeesCertificationdata= $employeesCertification
            -> join('certification','employeescertification.cid','=','certification.cid')
            ->where('eid',$eid)
            ->get();

        return view('certification.index',['employeesData' => $employeesData,'employeesCertificationdata' => $employeesCertificationdata]);
    }

    public function showcertification()
    {
        $certification= new Certification();
        $certificationData = $certification->all();

        return view('certification.showcertification',['certificationData' => $certificationData]);
    }
}
