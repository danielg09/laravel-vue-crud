<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
use Validator;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $tasks = Task::orderBy('id', 'DESC')->paginate(4);



        return [
            'paginate' => [
                'total' => $tasks->total(),
                'total' => $tasks->total(),
                'total' => $tasks->total(),
                'total' => $tasks->total(),
                'total' => $tasks->total(),
                'total' => $tasks->total(),
            ],
            'tasks' => $tasks

        ];

    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $messages = [
             'required' => 'Este campo es requerido',
        ];

        Validator::make($request->all(), [
            'keep' => 'required'
        ], $messages)->validate();

        //$request->validate([
        //    'keep' => 'required'
        //]);

        $task =  new Task();
        $task->keep = $request->keep;
        $task->save();

        return;
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $task = Task::findOrFail($id);

        return $task;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //

        $messages = [
             'required' => 'Este campo es requerido',
        ];

        Validator::make($request->all(), [
            'keep' => 'required'
        ], $messages)->validate();

        $task = Task::find($id);
        
        $task->keep = $request->keep;
        $task->save();

        return;

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //

        $task = Task::findOrFail($id);

        $task->delete();
    }
}
