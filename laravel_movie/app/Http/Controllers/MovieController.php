<?php

namespace App\Http\Controllers;
use App\Models\Movie;

use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function viewData()
    {
        $Viewdata = Movie::all();
        return view('movie', compact('Viewdata'));
    }

    public function viewadd()
    {
        return view('add');
    }


    public function createData(Request $request){
        $create=new Movie();
        $create->Movie=$request->input('Movie');
        $create->MovieName=$request->input('MovieName');
        $create->MovieDes=$request->input('MovieDes');
        $create->MovieGen=$request->input('MovieGen');
        $create->save();
        return redirect('movies')->with('message','The data has been added successfully');
     }

     public function editData($id){
        $update = Movie::find($id);
       return view('update',compact('update'));
     }
     
     public function updateData(Request $request, $id)
     {
       $update = Movie::find($id); //Post is the model name
       $update->Movie=$request->input('Movie');
       $update->MovieName=$request->input('MovieName');
       $update->MovieDes=$request->input('MovieDes');
       $update->MovieGen=$request->input('MovieGen');
       $update->update();
       return redirect('movies')->with('message','The data has been updated successfully');
     }

     public function deleteData($id){
        $delete = Movie::find($id);
        $delete->delete();
        return redirect('movies')->with('message','The data has been Deleted successfully');
     }

      
}
