<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ToDo;

class ToDoController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }
    public function index(){
        return view('ToDo.index');
    }
    public function store(Request $request){
        
        $this->validate($request,[
            'TodoTitle'=>'required|max:255',
            'TodoDescription'=> 'required|max:255',
            'TodoDate'=>'required|date',
        ]);
       /*
       $request->user()->to_dos()->create([
        'TodoTitle'=>$request->TodoTitle,
        'TodoDescription'=> $request->TodoDescription,
        'TodoDate'=>$request->TodoDate,
       ]);
       */
      
       return view('ToDo.ToDo_Confirmation',[
        'TodoTitle'=>$request->TodoTitle,
        'TodoDescription'=> $request->TodoDescription,
        'TodoDate'=>$request->TodoDate,
       ]);
    }
    public function confirmation(Request $request){
  
        $request->user()->to_dos()->create([
            'TodoTitle'=>$request->TodoTitle,
            'TodoDescription'=> $request->TodoDescription,
            'TodoDate'=>$request->TodoDate,
           ]);

           return redirect()->route('ToDo_Confirmed');
    }
    public function confirmed(){
        return view('ToDo.ToDo_Successfull');
    }
    public function todolist(){
        $todos=ToDo::get();

        return view('ToDo.ToDo_List',['todos'=>$todos]);

    }
}
