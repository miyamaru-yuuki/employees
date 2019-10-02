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
        $employees= new Employees();
        $employeesList = $employees->find($did);

        dd($employeesList);

        return view('todo.henkou',['todoData' => $todoData]);
        return view('department.index',['departmentList' => $departmentList]);
    }
}
