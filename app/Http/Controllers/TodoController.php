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
        Todo::where('id', $request->id)
        ->update(['task' => $request->task]);
        return $this->index();
    }

    public function delete(Request $request){
        Todo::destroy($request->id);
        return $this->index();
    }
}
