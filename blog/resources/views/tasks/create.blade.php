<!-- app/views/tasks/create.blade.php -->
@extends('layouts.app')
<!DOCTYPE html>
<html>
<head>
    <title>create</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">

<nav class="navbar navbar-inverse">

    <ul class="nav navbar-nav">
        <li><a href="/tasks">View All tasks</a></li>
        <li><a href="/tasks/create">Create a task</a>
    </ul>
</nav>

<h1>Create a task</h1>



<form action="/tasks" method='post'>
<!-- cross-site request forgery   -->
  {{ csrf_field() }}
 name:<br>
  <input type="text" name="name" id='name'><br>
  email:<br>
  <input type="email" name="email" id='email'><br>







  <select name="level" id="task_level" >
    <option value=0>low</option>
    <option value=1>medium</option>
    <option value=2>high</option>

  </select>
  <br>
  <input type="submit" value="Submit">
  <input type="reset">
</form>








</div>
</body>
</html>
