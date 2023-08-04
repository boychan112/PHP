<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class TodoController extends Controller
{
    public function index(){
        $todos = Todo::all();
        return view('index')->with('todos',$todos);
    }

    public function create(){
        return view('create');
    }

    public function details(Todo $todos, $id){
        $todos = Todo::find($id);

        return view('details')->with('todos', $todos);
    }

    public function edit(Todo $todo, $id){
        $todos = TOdo::find($id);
        return view('edit')->with('todos',$todos);
    }

    public function delete(Todo $todo){
        $todo->delete();
        return redirect('/');
    }

    public function update(Todo $todo){
        $data = request()->all();

        $todo->name = $data['name'];
        $todo->description = $data['description'];
        $todo->save();

        return redirect('/');
    }

    public function store(){
        $data = request()->all();

        $todo = new Todo();
        $todo->name = $data['name'];
        $todo->description = $data['description'];
        $todo->save();

        session()->flash('success','Todo created succesfully');

        return redirect('/');
    }

    // public function delete(Todo $todos, $id){
    //     Todo::findOrFail($id)->delete();

    //     return redirect('/');
    // }

    
}
