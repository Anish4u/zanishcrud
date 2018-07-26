<?php

namespace App;


// use Illuminate\Database\Eloquent\Model;
// // use  App\Task

class Task extends Model
{

// protected $fillable  = ['name', 'email','tasks_level'];

  protected $guarded = [];
//
//     //



    public function comments()
    {
//this would return strin representation  of full cklass path
// return $this->hasMany(App\Comment);
return $this->hasMany(Comment::class);

    }
    public function addComment( $bodycomments)
    {

      Comment::create(['body'=>request('bodycomments'),
                      'task_id' => $this->id
                      ]);



      return redirect('/tasks');
    }
}
