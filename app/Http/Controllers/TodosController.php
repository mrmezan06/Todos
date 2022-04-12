<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;

class TodosController extends Controller
{
    public function index(){
        $todos = Todo::all(); // fetch all data
        return view('todos')->with('todos', $todos);
    }

    public function store(Request $request){
        //dd($request->all());
        $todo = new Todo;

        $todo->todo = $request->todo; // extract data from form input

        $todo->save(); // save it to db

        return redirect()->back(); // back to the main view
    }
    
    public function delete($id){
        $todo = Todo::find($id); //findind todo with id
        $todo->delete();
        return redirect()->back();
    }

    // getting the todo data for update it
    public function update($id){
        $todo = Todo::find($id);
        return view('update')->with('todo', $todo);
    }
    // update the todo and save it db
    public function save(Request $request, $id){
        // dd($request->all()); // check the form data
        $todo = Todo::find($id);
        $todo->todo = $request->todo;
        $todo->save();

        //return redirect('todos');
        return redirect()->route('todos');
    }

    public function completed($id){
        $todo = Todo::find($id);
        $todo->completed = 1;
        $todo->save();
        return redirect()->route('todos');
    }
}
