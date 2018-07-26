<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
  protected $fillable = [
      'body','task_id'
  ];
  public function task()
  {
    //return $this->belongsTo(Task::class);

    return $this->belongsTo(Task::class,'task_num');

  }
    //
}
