<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employees;
use App\Models\Certification;
use App\Models\EmployeesCertification;
use DB;

class EmployeesCertificationController extends Controller
{
    public function index($eid)
    {
        $employees= new Employees();
        $employeesData = $employees->find($eid);

        $employeesCertification = new EmployeesCertification();
        $employeesCertificationData = $employeesCertification
            ->where('eid',$eid)
            ->get();

        $cid = [];
        foreach ($employeesCertificationData as $data){
            array_push($cid,$data->cid);
        }

        $certification= new Certification();
        $certificationData = $certification
            ->whereNotIn('cid',$cid)
            ->get();

        $employeesCertification = new EmployeesCertification();
        $employeesCertificationdata= $employeesCertification
            -> join('certification','employeescertification.cid','=','certification.cid')
            ->where('eid',$eid)
            ->get();

        return view('certification.index',['certificationData' => $certificationData,'employeesData' => $employeesData,'employeesCertificationdata' => $employeesCertificationdata]);
    }

    public function showcertification()
    {
        $certification= new Certification();
        $certificationData = $certification->all();

        return view('certification.showcertification',['certificationData' => $certificationData]);
    }

    public function certificationaddkakunin(\App\Http\Requests\EmployeesCertificationRequest $request)
    {
        $cname = $request->input('cname');
        return view('certification.addkakunin',['cname' => $cname]);
    }

    public function certificationaddkanryou(\App\Http\Requests\EmployeesCertificationRequest $request)
    {
        $cname = $request->input('cname');

        $certification= new Certification();
        $certification->create(['cname' => $cname]);

        return view('certification.kanryou',['shori' => '追加']);
    }

    public function certificationhenkou($cid)
    {
        $certification= new Certification();
        $certificationData = $certification->find($cid);

        return view('certification.henkou',['certificationData' => $certificationData]);
    }

    public function certificationhenkoukanryou(\App\Http\Requests\EmployeesCertificationRequest $request)
    {
        $cid = $request->input('cid');
        $cname = $request->input('cname');

        $certification= new Certification();
        $certification->where('cid',$cid)
            ->update(['cname' => $cname]);

        return view('certification.kanryou',['shori' => '変更']);
    }

    public function certificationdelkakunin($cid)
    {
        $certification= new Certification();
        $certificationData = $certification->find($cid);

        return view('certification.delkakunin',['certificationData' => $certificationData]);
    }

    public function certificationdelkanryou(Request $request)
    {
        $cid = $request->input('cid');

        $certification= new Certification();
        $certification -> where('cid', $cid)->delete();

        return view('certification.kanryou',['shori' => '削除']);
    }

    public function mycertificationaddkakunin(Request $request)
    {
        $cid = $request->input('cid');
        $eid = $request->input('eid');

        $certification= new Certification();
        $certificationData = $certification->find($cid);

        return view('mycertification.addkakunin',['certificationData' => $certificationData,'eid' => $eid]);
    }

    public function mycertificationaddkanryou(Request $request)
    {

        $cid = $request->input('cid');
        $eid = $request->input('eid');

        $employeesCertification = new EmployeesCertification();
        $employeesCertification->create(['eid' => $eid,'cid' => $cid]);

        return view('mycertification.kanryou',['shori' => '追加','eid' => $eid]);
    }

    public function mycertificationdelkakunin($ecid)
    {
        $employeesCertification = new EmployeesCertification();
        $employeesCertificationData = $employeesCertification->find($ecid);

        $certification= new Certification();
        $certificationData = $certification->find($employeesCertificationData['cid']);

        return view('mycertification.delkakunin',['certificationData' => $certificationData,'employeesCertificationData' => $employeesCertificationData]);
    }

    public function mycertificationdelkanryou(Request $request)
    {
        $ecid = $request->input('ecid');

        $employeesCertification = new EmployeesCertification();
        $employeesCertificationData = $employeesCertification->find($ecid);
        $employeesCertification -> where('ecid', $ecid)->delete();

        return view('mycertification.kanryou',['eid' => $employeesCertificationData['eid'],'shori' => '削除']);
    }
}