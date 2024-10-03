<?php

namespace App\Http\Controllers;
use App\Exports\ExportUser;
use App\Exports\UsersTasksExport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use Session;

class UserController extends Controller
{
  public function home(){

    return view('home');
  }

  public function user_save(Request $request){

    $request->validate([
        'email' =>'required|email'
    ]);
    

    DB::table('users')->insert([
        'name' => $request->name,
        'mobile' => $request->mobile,
        'email' => $request->email,
     ]);

     return redirect()->back()->with('status','User Added Successfully!!!');

  }
  public function show_user(){

    $user=DB::table('users')->paginate(10);

    return view('show_user',compact('user'));

  }

  public function add_task(){

    $user=DB::table('users')->get();

    return view('add_task',compact('user'));

  }

  public function save_task(Request $request){
 
   
    
     DB::table('tasks')->insert([
     

      'title'=>$request->title,
      'description'=>$request->description,
      'task_type'=>$request->task_type,
      'user_id'=>$request->user_id,
     
     
   ]);
   return redirect()->back()->with('status','Task Added Successfully!!!');;
  }

  public function show_user_task(){
     
    $task=DB::table('tasks')
              ->join('users','tasks.user_id','=','users.id')
             
              ->paginate(10);

             

       return view('show_user_task',compact('task'));

  }

  public function exportUsers(){
   
    return Excel::download(new UsersTasksExport(), 'users_and_tasks.xlsx');

 

}

}