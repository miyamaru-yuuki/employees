<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employees;
use App\Models\Department;

class EmployeesController extends Controller
{
    public function addkakunin(\App\Http\Requests\EmployeesRequest $request)
    {
        $did = $request->input('did');
        $ename = $request->input('ename');
        $address = $request->input('address');
        $tel = $request->input('tel');

        return view('employees.addkakunin',['did' => $did,'ename' => $ename,'address' => $address,'tel' => $tel]);
    }

    public function addkanryou(\App\Http\Requests\EmployeesRequest $request)
    {
        $did = $request->input('did');
        $ename = $request->input('ename');
        $address = $request->input('address');
        $tel = $request->input('tel');

        $employees= new Employees();
        $employees->create(['did' => $did,'ename' => $ename,'address' => $address,'tel' => $tel]);

        return view('employees.kanryou',['shori' => '追加']);
    }

    public function henkou($eid)
    {
        $employees= new Employees();
        $employeesData = $employees->find($eid);

        $department = new Department();
        $departmentList = $department->all();

        return view('employees.henkou',['departmentList' => $departmentList,'employeesData' => $employeesData]);
    }

    public function henkoukanryou(\App\Http\Requests\EmployeesRequest $request)
    {
        $eid = $request->input('eid');
        $did = $request->input('did');
        $ename = $request->input('ename');
        $address = $request->input('address');
        $tel = $request->input('tel');

        $employees= new Employees();
        $employees->where('eid',$eid)
            ->update(['did' => $did,'ename' => $ename,'address' => $address,'tel' => $tel]);

        return view('Employees.kanryou',['shori' => '変更']);
    }

    public function delkakunin($eid)
    {
        $employees= new Employees();
        $employeesData = $employees->find($eid);

        return view('Employees.delkakunin',['employeesData' => $employeesData]);
    }

    public function delkanryou(Request $request)
    {
        $eid = $request->input('eid');

        $employees= new Employees();
        $employees -> where('eid', $eid)->delete();

        return view('Employees.kanryou',['shori' => '削除']);
    }
}
