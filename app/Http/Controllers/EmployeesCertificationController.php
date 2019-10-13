<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use App\Models\Certification;
use App\Models\EmployeesCertification;

class EmployeesCertificationController extends Controller
{
    public function index($eid)
    {
        $employeesCertification = new EmployeesCertification();
        $employeesCertificationdata= $employeesCertification
            -> join('certification','employeescertification.cid','=','certification.cid')
            //-> join('employees','employeescertification.eid','=','employees.eid')
            ->where('eid',$eid)
            ->get();

        return view('certification.index',['employeesCertificationdata' => $employeesCertificationdata]);
    }
}
