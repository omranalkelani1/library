<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\admin;
use App\Models\login;


class c_admin extends Controller
{
    //
    public function index(Request $request)
    {
   
        //
         $admin= admin::all();
     
       foreach ($admin as $adm)
       {
           if ($adm["user_name"]==$request->user_name && $adm["password"]==$request->password)
           {session_start();
           $_SESSION['id_customer']=$adm['id'];
           $_SESSION['user_name']=$adm["user_name"];
           return view("admin_page");
           }
          
          //  return view("admin_page");
        }
      $login= login::all();
     
        foreach ($login as $log)
        {
        
            if ($log["user_name"]==$request->user_name && $log["password"]==$request->password)
            {
              session_start();
              $_SESSION['id_customer']=$log['id'];
              $_SESSION['user_name']=$log["user_name"];
              
            return redirect("all_books");
            }
         }
         return view('sign_up');
   
    }
    

}
