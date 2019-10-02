<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;
use App\Models\Employees;

class DepartmentController extends Controller
{
    public function index()
    {
        $department = new Department();
        $departmentList = $department->all();

        return view('department.index',['departmentList' => $departmentList]);
    }

    public function showemployees($did)
    {

        $department = new Department();
        $departmentData = $department->find($did);

        $employees= new Employees();
        $employeesList = $employees->where('did',$did)->get();

        return view('employees.index',['did' => $did,'departmentData' => $departmentData,'employeesList' => $employeesList]);
    }

    public function add(\App\Http\Requests\DepartmentRequest $request)
    {
        $dname = $request->input('dname');

        $department= new Department();
        $department->create(['dname' => $dname]);

        return view('department.kanryou',['shori' => '追加']);
    }

    public function henkoukanryou(\App\Http\Requests\DepartmentRequest $request)
    {
        $did = $request->input('did');
        $dname = $request->input('dname');

        $department= new Department();
        $department->where('did',$did)
            ->update(['dname' => $dname]);

        return view('Department.kanryou',['shori' => '変更']);
    }

    public function delkanryou(Request $request)
    {
        $did = $request->input('did');

        $department= new Department();
        $department -> where('did', $did)->delete();

        return view('Department.kanryou',['shori' => '削除']);
    }
}
