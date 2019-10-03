<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employees;

class EmployeesController extends Controller
{
    public function employeesaddkakunin(\App\Http\Requests\EmployeesRequest $request)
    {
        $did = $request->input('did');
        $ename = $request->input('ename');
        $address = $request->input('address');
        $tel = $request->input('tel');

        return view('employees.employeesaddkakunin',['did' => $did,'ename' => $ename,'address' => $address,'tel' => $tel]);
    }

    public function employeesaddkanryou(\App\Http\Requests\EmployeesRequest $request)
    {
        $did = $request->input('did');
        $ename = $request->input('ename');
        $address = $request->input('address');
        $tel = $request->input('tel');

        $employees= new Employees();
        $employees->create(['did' => $did,'ename' => $ename,'address' => $address,'tel' => $tel]);

        return view('employees.kanryou',['shori' => '追加']);
    }

    public function employeeshenkou($eid)
    {
        $employees= new Employees();
        $employeesData = $employees->find($eid);

        return view('employees.employeeshenkou',['employeesData' => $employeesData]);
    }

    public function employeeshenkoukanryou(\App\Http\Requests\EmployeesRequest $request)
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

    public function employeesdelkakunin($eid)
    {
        $employees= new Employees();
        $employeesData = $employees->find($eid);

        return view('Employees.employeesdelkakunin',['employeesData' => $employeesData]);
    }

    public function employeesdelkanryou(Request $request)
    {
        $eid = $request->input('eid');

        $employees= new Employees();
        $employees -> where('eid', $eid)->delete();

        return view('Employees.kanryou',['shori' => '削除']);
    }
}
