<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\task;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
{
    public function create(Request $request)
    {
        //obtengo id usuario identificado
        $user_id = Auth::id();
        $sessionId = session()->getId();


        $request->validate([
            'nombre' => 'required'
        ]);

        $request->merge([
            'estado_id' => 1,
            'user_id' => $user_id
        ]);

        task::create($request->all());

        return response()->json(['success' => true]);
    }

    public function getTasks()
    {
        $user_id = auth()->id(); // Obtener el ID del usuario autenticado
        $tasks = Task::where('user_id', $user_id)->get(); // Obtener todas las tareas del usuario

        return response()->json(['tasks' => $tasks]);
    }


    public function deletetask ($id){
        $task= task::find($id);

        if(!$task){
            return response()->json(['error'=>'la tarea no existe'],404);
        }

        $task->delete();
        return response()->json(['success'=> true]);

    }

    public function updatetask(Request $request){
    try {
        $task = task::find($request->id);
        if (!$task) {
            return response()->json(['error' => 'la tarea no existe'], 404);
        }
        $task->update(['estado' => $request->estado]);
        return response()->json(['success' => true]);
    } catch (\Exception $e) {
        return response()->json(['error' => $e->getMessage()], 500);
    }
}
}   
