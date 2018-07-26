<?php

namespace App\Http\Controllers;

use App\Task;
use App\Comment;
use Illuminate\Http\Request;

class CommentsController extends Controller
{

public function store(Task  $task)
{

 $task->addComment(request('bodycomments'));
  // dd($task);
// Comment::create(['body'=>request('bodycomments'),
//                 'task_id' => $task->id
//                 ]);
//
//
//
 return back();

}

    //
}
