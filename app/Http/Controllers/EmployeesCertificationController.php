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
        $employeesCertificationdata= $employeesCertification->where('eid',$eid)->get();

        dd($employeesCertificationdata[1]['cid']);

        foreach ($employeesCertificationdata as $data){

        }

        $certification = new Certification();
        $cname = $certification->where('cid',$cid)->get();

        dd($cname);

        return view('certification.index',['cid' => $cid]);
    }
}
