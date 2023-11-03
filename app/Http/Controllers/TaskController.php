<?php

namespace App\Http\Controllers;

use App\Models\task;
use App\Models\User;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function task(){
        $model = User::get(['name','id']); 
        return view ('task.form', compact('model'));
    }

    public function add_task(Request $request){
      $validatedData = $request->validate([
          'username' => 'required|exists:users,id', 
          'task_detail' => 'required',
          'task_type' => 'required|in:Pending,Done'       ]);
  
      $save = new Task();
  
      $save->username = $validatedData['username'];
      $save->task_detail = $validatedData['task_detail'];
      $save->task_type = $validatedData['task_type'];
      $save->save();
  
      return redirect('task');
  }
  

     public function get_task(){
        $gettask = task::with('getuser')->paginate(10);
        return view ('task.task-list',compact('gettask'));
     }

    

      

     public function delete($id) {
      $task = task::find($id);
  
     
      $task->delete();
      return redirect('get-task');
  }
  
  public function edit($id){
// dd('hello');
    $task = task :: find($id);
    $user = User::all();
    // dd($model1);

     return view ('task.edit', compact('task','user'));
}

 public function task_update (Request $request){
  // dd($request);
  $data = $request->all();

$update = \DB::table('tasks') ->where('id', $data['id'])->update( [ 'username' => $data['username'], 'task_detail' => $data['task_detail'], 'task_type' => $data['task_type'],  ]); 

return redirect('get-task');

}





}
