<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class newController extends Controller
{
   public function check($id , $name){
        return "id =" .$id."<br> Name =" .$name; 
   }
}
