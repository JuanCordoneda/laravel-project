<?php
namespace App\Http\Controllers;
use App\Models\Todo;

class TodoController extends Controller
{
    public function index(){
        $todos = Todo::all();
        return response()->json($todos);
    }

    public function store(Request $request){
        $todo = Todo::create($request);
        return response()->json($todo, 201);
    }

    public function update(Request $request, $id){
        $todo = Todo::find($id);
        if ($todo) {
            $todo->update($request->all());
        }else{
            return response()->json(['error' => 'Todo not found'], 404);
        }
    }

    public function destroy($id)
    {
        $todo = Todo::find($id);
        if ($todo){
            $todo->delete();
            return response()->json(['message' => 'Todo deleted'], 203);
        }else{
            return response()->json(['error' => 'Todo not found'], 404);
        }
    }
}