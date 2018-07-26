<html>
<head>
    <title>Look! I'm CRUDding</title>
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

          <h1>Edit </h1>
          <form action="{{'/tasks/'.$task->id}}" method="post">
            <!--  to identify in routes verb use is patch and to update  -->
                      {{ method_field('patch') }}
                      {{csrf_field()}}


<!-- getting values from database -->

                      <input type="text" name="name" id='name' value="{{ $task->name }}"><br>
                      email:<br>
                      <input type="email" name="email" id='email' value="{{ $task->email }}"><br>

                      <select name="level" id="task_level" >
                        <option selected>{{ $task->tasks_level }}</option>
                        <option value=0>low</option>
                        <option value=1>medium</option>
                        <option value=2>high</option>

                      </select>
                      <br>
                      <button class="btn btn-default" type="submit">update</button>
            </form>


</div>
</body>
</html>
