<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Foundation\Auth\AuthenticationUsers;
 
class usercontroller extends Controller
{
    //
    function login(Request $req)
    {
        $user=user::where(['email'=>$req->email])->first();
        if(!$user || !Hash::check($req->password,$user->password))
        { 
            
    
    
                return" Username or Password incorrect";
                
    
            }
          
         else
    $req->session()->put('user',$user);
 
            return redirect('/');
        

      
       } 

    function register(Request $req)
{
    $this->validate($req,[
           'name' => 'required',
           'email' => 'required',
           'password' => 'required',
           
       ]);
       
       $user=new user;
       $user->name=$req->name;
       $user->email=$req->email;
       $user->password=Hash::make($req->password);
       $user->save();
      return  redirect('/login');
    
}

function adminlogin(Request $req)
    {
        $user=user::where(['email'=>'admin@gmail.com'])->first();
        if(!$user || !Hash::check($req->password,$user->password))
        { 
            
    
                return" ONLY ADMIN CAN LOGIN IN";
    
            }
          
         else
    $req->session()->put('user',$user);
 
            return redirect('/list');
        

      
       } 



}





