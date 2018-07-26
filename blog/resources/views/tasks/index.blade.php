<!-- app/views/tasks/index.blade.php -->
@extends('layouts.app')
<!DOCTYPE html>
<html>
<head>
    <title>basic </title>
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
<h1>All the tasks</h1>


<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Email</td>
            <td>task Level</td>
            <!-- <td>Commentsperson</td> -->
            <td>Actions</td>
        </tr>
    </thead>
    <tbody>

    @foreach($tasks as  $value)
        <tr>
            <td>{{ $value->id }}</td>
            <td>{{ $value->name }}</td>
            <td>{{ $value->email }}</td>
            <td>{{ $value->tasks_level }}</td>
              <!-- <td>{{ $value->comment_person_name }}</td> -->

            <!-- we will also add show, edit, and delete buttons -->
            <td>
                <a class="btn btn-small btn-info" href=" /tasks/{{ $value->id }}/edit ">Edit this task</a>
                <a class="btn btn-small btn-success" href="/tasks/{{ $value->id }}">Show this task</a>
                  <form action="/tasks/{{ $value->id }}" method="post">

                      {{ method_field('delete') }}
                      {{csrf_field()}}
                      <button class="btn btn-danger" type="submit">Delete</button>
                  </form>

            </td>
        </tr>
    @endforeach
    </tbody>
</table>

<div>

</div>
</div>
</body>
</html>
