<?php

$todos = json_decode(file_get_contents('./todos.json'), true);

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <title>PHP Todo Manager</title>
  </head>
  <body>
    <div class='main'>
      <div class='noCss'>
        <div class="container">
          <h1>PHP Todo Manager</h1>
          <p>Without CSS. :-(</p>
            <form action="newtodo.php" method="post">
              <input type="text" name="todo_name" placeholder="Enter new todo...">
              <button class="btn">Add</button>
            </form>
            <br>
              <?php foreach ($todos as $todoName => $todo): ?>
                <div style="margin-bottom: 20px;">
                  <form style="display: inline" action="change_status.php" method="post">
                    <input type="hidden" name="todo_name" value="<?php echo $todoName ?>">
                    <input type="checkbox" name="status" value="1" <?php echo($todo['completed'] ? 'checked' : '') ?>>
                  </form>
                    <?php echo $todoName ?>
                  <form style="display: inline" action="delete.php" method="post">
                    <input type="hidden" name="todo_name" value="<?php echo $todoName ?>">
                    <button class="btnDelete">Delete</button>
                  </form>
                </div>
              <?php endforeach; ?>
          </div>
      </div>
      <div class='withCss'>
        <div class="container">
          <h1>PHP Todo Manager</h1>
          <p>With CSS. 😍</p>
            <form action="newtodo.php" method="post">
              <input type="text" name="todo_name" placeholder="Enter new todo...">
              <button class="btn">Add</button>
            </form>
            <br>
              <?php foreach ($todos as $todoName => $todo): ?>
                <div style="margin-bottom: 20px;">
                  <form style="display: inline" action="change_status.php" method="post">
                    <input type="hidden" name="todo_name" value="<?php echo $todoName ?>">
                    <input type="checkbox" name="status" value="1" <?php echo($todo['completed'] ? 'checked' : '') ?>>
                  </form>
                    <?php echo $todoName ?>
                  <form style="display: inline" action="delete.php" method="post">
                    <input type="hidden" name="todo_name" value="<?php echo $todoName ?>">
                    <button class="btnDelete">&#10060;</button>
                  </form>
                </div>
              <?php endforeach; ?>
          </div>
      </div>
    </div>

  <script src="app.js"></script>
  </body>
</html>
