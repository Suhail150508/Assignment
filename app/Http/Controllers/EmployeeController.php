<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class EmployeeController extends Controller
{
    public function employee_show(){
        $employees = Post::paginate('4');
        return view('search',compact('employees'));
    }
    public function employee_create(){
        return view('Task_5.employee_create');

    }

    public function employee_store(Request $request){




        $posts = new Post;

        $posts->name=$request->name;

        $posts->salary=$request->salary;
        $posts->save();
        return Redirect::to('/search')->with('message','Added Successfully!!');
    }

    public function employee_edit($id){
        $employees =Post::find($id);
        return view('Task_5.employee_update',compact('employees'));

    }
    public function employee_update(Request $request,$id){
       $update = Post::find($id);
       $update->update([

       'name'=> $request->name,
       'salary'=>$request->salary,
]);
     if($update)

        return Redirect::to('/employee_show')->with('message','Updated Successfully!!');

    }


    public function employee_delete($id){

       Post::find($id)->delete();

    //    $delete = $employees->delete();

    //  if($delete)

        return back()->with('message','deleted Successfully!!');
    // }

    }


    public function search(Request $request){
        // $posts = Employee::paginate('3');

      $search = $request->search;
        $posts = Post::where(function($query)use($search){
$query->where('name','like',"%$search%")
->orWhere('salary','like',"%$search%");
        })->get();
        return view('Task_5.employee_show',compact('posts','search'));
    }
    }

