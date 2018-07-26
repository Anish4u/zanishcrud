<!DOCTYPE html>
<html>
<head>
    <title>basic show</title>
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


    <div class="jumbotron text-center">
        <h2>{{ $task->name }}</h2>
        <p>
            <strong>Email:</strong> {{ $task->email }}<br>
            <strong>Level:</strong> {{ $task->tasks_level }}
        </p>
    </div>
<div class="comments">

        @foreach($task->comments as $com)
        <strong>
          {{$com->created_at}}
        </strong>

      <article>
      {{ $com->body }}
      </article>
      @endforeach

 <div class= "card">
  <div class="card-block">


    <form action="/tasks/{{ $task->id }}/comments" method='POST'>
    <!-- cross-site request forgery   -->
      {{ csrf_field() }}

      <input type="textarea" name="bodycomments" placehold="add comments>"<br>

      <br>
      <input type="submit" value="addComment">

    </form>
</div>



</div>
</body>
</html>
