<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\shop;


class newController extends Controller
{
//    public function check($id , $name){
//         return "id =" .$id."<br> Name =" .$name; 
//    }

//    public function display(){
//       return view('layout.master');
//    }
   

//    public function displayabout(){
//       return view('layout.aboutus');
//    }

//    public function displaycontact(){
//       return view('layout.contact');
//    }

   public function displayHome(){
      return view('layout.candi');
   }

//       public function displayarray(){

//          $team=['member1'=>'Samaaar',
//          'member2'=>'Ghofran',
//          'member3'=>'Ebraheem',
//      ];
//      return view('layout.aboutus', compact('team'));
//  }


################ CRUD APP #########################

public function viewData()
{
    $update = shop::all();
    return view('layout.shop', compact('update'));
}


public function createData(Request $request){
   $create=new shop();
   $create->img=$request->input('image');
   $create->CandyName=$request->input('Name');
   $create->CandyPrice=$request->input('CandyPrice');
   $create->CandyQuantity=$request->input('CandyQuantity');
   $create->save();
   return redirect('layout.shop')->with('message','The data has been added successfully');
}
 

public function shop(){
   return view('layout.shop');
}

public function addData(){
   return view('layout.add');
}

public function editData($id){
   $update = shop::find($id);
  return view('layout.update',compact('update'));
}
public function updateData(Request $request, $id)
{
  $update = shop::find($id); //Post is the model name
  $update->CandyName=$request->input('Name');
  $update->CandyPrice=$request->input('CandyPrice');
  $update->CandyQuantity=$request->input('CandyQuantity');
  $update->update();
  return redirect('/shop')->with('message','The data has been updated successfully');
}

public function deleteData($id){
   $delete = shop::find($id);
   $delete->delete();
   return redirect('/shop')->with('message','The data has been updated successfully');
}
public function selectData($id){
   $update= shop::find($id);
   return view('layout.showData',compact('update'));
}
}
