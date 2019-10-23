<?php

namespace App\Http\Controllers;

use App\Task;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Taskcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //\
//        return "hello";
        $user_id=Auth::id();
        $user=User::findOrfail($user_id);
        $task=$user->task()->get();
        return view('task.index',compact('task'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('task.create');

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

        $user_id=Auth::id();
        Task::create([
            'task'=>$request->input('Task'),
            'user_id'=>$user_id
        ]);
//        return view("task.index");
        return redirect()->route('task.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        $task= Task::findOrFail($id);
        return view('task.edit',compact('task'));
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
        $task=Task::findOrFail($id);
        $task->update(['task'=>$request->input('Task')
        ]);
        return redirect()->route('task.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $task=Task::where('id',$id)->delete();
//        $task=$this->destroy($id);
//        return redirect()->route('task.index');
//        Task::destroy($id);
        return redirect()->route('task.index');


    }

}
