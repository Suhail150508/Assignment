<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Redirect;

class PostController extends Controller
{

    public function employee_create(){
        $users = User::all();
        return view('Assignment.post_create',compact('users'));

    }

    public function employee_store(Request $request){
    $request->validate([
    'name' =>'required',
    'title' =>'required',
    'description' =>'required',
    'user' =>'required',
    'image' =>'required',
]);
        $posts = new Post;

        $posts->name=$request->name;
        $posts->title=$request->title;
        $posts->user_id = $request->user;
        $posts->description=$request->description;
        // $posts->image=$request->image->store('post_image');
        if($request->hasFile('image'))
        {
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $fileName = time().'.'.$extention;
            $file->move('imagesss',$fileName);
            $posts->image=$fileName;
        }
        $posts->save();
        return Redirect()->to('/search')->with('message','Added Successfully!!');
    }

    public function employee_edit($id){
        $posts =Post::find($id);
        $users = User::all();
        return view('Assignment.post_update',compact('posts','users'));

    }
    public function employee_update(Request $request,$id){

        $request->validate([
            'name' =>'required',
            'title' =>'required',
            'description' =>'required',
            'user' =>'required',
            'image' =>'required'
        ]);

        $posts = Post::find($id);

       $posts->name=$request->name;
       $posts->title=$request->title;
       $posts->user_id = $request->user;
       $posts->description=$request->description;
       if($request->hasFile('image'))
       {
        $destination = 'imagesss/'.$posts->image;
        if(File::exists($destination))
        {
           File::delete($destination);
        }
           $file = $request->file('image');
           $extention = $file->getClientOriginalExtension();
           $fileName = time().'.'.$extention;
           $file->move('imagesss',$fileName);
           $posts->image=$fileName;
       }
        $posts->update();

        return Redirect::to('/search')->with('message','Updated Successfully!!');

    }


    public function employee_delete($id){

       Post::find($id)->delete();
        return back()->with('message','deleted Successfully!!');
    // }

    }


    public function search(Request $request){

      $search = $request->search;
      $posts = Post::where(function($query)use($search){
               $query->where('title','like',"%$search%")
               ->orWhere('description','like',"%$search%")
               ->orWhere('name','like',"%$search%");
               })->paginate(3);

        return view('Assignment.post_show',compact('posts','search'));
    }
    }
