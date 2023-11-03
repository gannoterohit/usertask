<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
      public function user(){

        return view ('user.user');
      }

      public function add_user(Request $request)
      {
          $validatedData = $request->validate([
              'name' => 'required|string|max:255',
              'email' => 'required|email|unique:users,email',
              'mobile' => 'required|numeric',
          ]);
      
          $model = new User();
      
          $model->name = $validatedData['name'];
          $model->email = $validatedData['email'];
          $model->mobile = $validatedData['mobile'];
      
          $model->save();
      
          return redirect('get-user');
      }
      

      public function get_user(){
            $model = User::latest()->paginate(10);
             return view ('user.user-list', compact('model'));
      }

     

      public function edit($id){

            $model = User :: find($id);
             return view ('user.user-edit', compact('model'));
      }

      public function user_update(Request $request){
            $data = $request->all();

            $id = $data['id'];
 $model = User::find($id);

 $model->name = $data['name'];
 $model->email = $data['email'];
 $model->mobile = $data['mobile'];

 $model->save();
 return redirect ('get-user');
      }

      public function delete($id) {
            $user = User::find($id);
            $user->delete();
            return redirect('get-user');
        }
        
}