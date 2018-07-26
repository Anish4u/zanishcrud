<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

      $tasks = Task::all();
        return view('tasks.index')
            ->with('tasks', $tasks);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {  // create view
        return view('tasks.create');
    }

    public function store()
    {
      // requesting and inserting data into table

                Task::create(['name'=> request('name'),
                'tasks_level'=>request('level'),
                'email'=>request('email'),
                    ]);



              return Redirect('/tasks')
              ->with('flash','new task created');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

     public function edit($id)
     {

       $task = Task::findOrFail($id); //Get task specified by id

//edit View
     return view('tasks.edit',compact('task'));

     }



     public function update( Request $request, $id)

     {
          $task = Task::findOrFail($id); //Get task specified by id

          // requesting  the field
      //    $input = $request->only(['name', 'email', 'level']);

          // performing update query of   table task

          $task->name  = request('name');
         $task->email = request('email');
         $task->tasks_level =request('level');

          //'tasks_level'=>request('level'),
           $task->save();

        //  $task->fill($input)->save();
          //dd($task);
          return redirect('/tasks');
        }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function show($id)
         {

             // get  task  specified by  id
             $task = Task::find($id);
             // $id=request('name');
// dd($task->comments);

             // show the view and pass the task to it
             return view('tasks.show',compact('task'));
         }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    public function destroy($id)
    {
 // get  task  specified by  id
             $task = Task::findOrFail($id);

// executing delete query of specified id
             $task->delete();
             return redirect('/tasks');
        //
    }



}






    // public function test($id)
    // {
    //   // get the task
    //   $task = Task::find($id);
    //
    //   // show the view and pass the task to it
    //   return view('tasks.show',compact('task'));
    // }
    //
    //
    //
    // /**
    //  * Update the specified resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    //
    // /**
    //  * Remove the specified resource from storage.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */












//     public function editinsert(Task $id)
//
// {
//   // dd($id);
//   return view('tasks.edit',compact('id'));
  //
  // $task = Task::find($id);
  //
  //
  //
  // $task->name  = request('name');
  // $task->email = request('email');
  // $task->tasks_level =request('level');
  // $task->save();
// }





// public function store(Request $request)
// {
//
//
//   // validate
//     // read more on validation at http://laravel.com/docs/validation
//     $rules = array(
//         'name'       => 'required',
//         'email'      => 'required|email',
//         'tasks_level' => 'required|numeric'
//     );
//
//
//         {
//            return Redirect('tasks/create');
//         $tasks = new Task;
//         $tasks->name       = Input::get('name');
//         $tasks->email      = Input::get('email');
//         $tasks->tasks_level = Input::get('tasks_level');
//         $tasks->save();
//
//         // redirect
//         Session::flash('message', 'Successfully created tasks!');
//         return Redirect('task');
//     }
// }



// public function update(Request $request, $id)
// {
//   $rules = array(
//      'name'       => 'required',
//      'email'      => 'required|email',
//      'tasks_level' => 'required|numeric'
//  );
//  $validator = Validator::make(Input::all(), $rules);
//
//  // process the login
//  if ($validator->fails()) {
//      return Redirect('task/' . $id . '/edit')
//          ->withErrors($validator)
//          ->withInput(Input::except('password'));
//  } else {
//      // store
//      $task = Task::find($id);
//      $task->name  = Input::get('name');
//      $task->email = Input::get('email');
//      $task->tasks_level = Input::get('tasks_level');
//      $task->save();
//
//
//
//      // redirect
//      Session::flash('message', 'Successfully updated task!');
//      return Redirect::to('task');
//  }
// }
