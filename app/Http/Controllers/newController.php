<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class newController extends Controller
{
   public function check($id , $name){
        return "id =" .$id."<br> Name =" .$name; 
   }

   public function display(){
      return view('layout.master');
   }
   

   public function displayabout(){
      return view('layout.aboutus');
   }

   public function displaycontact(){
      return view('layout.contact');
   }

   public function displayHome(){
      return view('layout.candi');
   }

      public function displayarray(){

         $team=['member1'=>'Samaaar',
         'member2'=>'Ghofran',
         'member3'=>'Ebraheem',
     ];
     return view('layout.aboutus', compact('team'));
 }


}
