<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class EmployeeController extends Controller
{
    public function employee_show(){
        $employees = Employee::all();
        return view('Task_5.employee_show',compact('employees'));
    }
    public function employee_create(){
        return view('Task_5.employee_create');

    }

    public function employee_store(Request $request){

        $employees = new Employee;

        $employees->name=$request->name;
        $employees->salary=$request->salary;
        $employees->save();
        return Redirect::to('/employee_show')->with('message','Added Successfully!!');
    }

    public function employee_edit($id){
        $employees =Employee::find($id);
        return view('Task_5.employee_update',compact('employees'));

    }
    public function employee_update(Request $request,$id){
       $update = Employee::find($id);
       $update->update([

       'name'=> $request->name,
       'salary'=>$request->salary,
]);
     if($update)

        return Redirect::to('/employee_show')->with('message','Updated Successfully!!');

    }


    public function employee_delete($id){

        Employee::find($id)->delete();

    //    $delete = $employees->delete();

    //  if($delete)

        return back()->with('message','deleted Successfully!!');
    // }

    }

    }

