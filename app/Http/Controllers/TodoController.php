<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class TodoController extends Controller
{
    public function index(){
        return view('todo', ['todos' => Todo::all()]);
    }

    public function create(Request $request){
        $todo = new Todo;
        $todo->task = $request->task;
        $todo->save();
        return $this->index();
    }

    public function edit(Request $request){
        $todo = Todo::find($request->id);
        $todo->task = $request->task;
        $todo->save();
        return $this->index();
    }

    public function delete(Request $request){
        $todo = Todo::find($request->id);
        $todo->delete();
        return $this->index();
    }
}
