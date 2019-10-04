<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;
use App\Models\Employees;
use DB;

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
        $employees= new Employees();
        $employeesList = $employees->where('did',$did)->get();

        return view('employees.index',['did' => $did,'employeesList' => $employeesList]);
    }

    public function addkakunin(\App\Http\Requests\DepartmentRequest $request)
    {
        $dname = $request->input('dname');
        return view('Department.addkakunin',['dname' => $dname]);
    }

    public function addkanryou(\App\Http\Requests\DepartmentRequest $request)
    {
        $dname = $request->input('dname');

        $department= new Department();
        $department->create(['dname' => $dname]);

        return view('department.kanryou',['shori' => '追加']);
    }

    public function henkou($did)
    {
        $department = new Department();
        $departmentData = $department->find($did);

        return view('Department.henkou',['departmentData' => $departmentData]);
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

    public function delkakunin($did)
    {
        $department= new Department();
        $departmentData = $department->find($did);

        return view('Department.delkakunin',['departmentData' => $departmentData]);
    }

    public function delkanryou(Request $request)
    {
        $did = $request->input('did');

        $department= new Department();
        $department -> where('did', $did)->delete();

        return view('Department.kanryou',['shori' => '削除']);
    }

    public function ekensaku(Request $request)
    {
        $ename = $request->input('ename');

        $employees= new Employees();
        $employeesList = $employees -> where('ename','like','%' .$ename. '%')->get();

        foreach ($employeesList as $employees){
            $departmentList[] = DB::table('department') ->join('employees','department.did','=','employees.did')->where('did',$employees->did)->get();
        }

        dd($departmentList);

        return view('Department.kensakukekka',['departmentList' => $departmentList,'employeesList' => $employeesList]);
    }
}
