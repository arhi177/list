<?php require 'client.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистарция</title>
<br>
<center>

  <div class="container">
    <div class="row">
      <form class="col s12" method="POST" action="../scripts/addClient.php">
        <div class="row">
          <div class="input-field col s6">
            <input name="name" placeholder="Имя"  id="first_name" type="text" class="validate" autocomplete="off" required>
            <label for="first_name">Имя</label>
          </div>
          </div>
          <br>
          <div class="input-field col s6">
            <input  name="age" placeholder="Возраст" id="last_name" type="text" class="validate"  autocomplete="off" required>
            <label for="last_name">Возраст</label>
            <button style="margin-top: 10px;" type="submit" class="waves-effect waves-light btn">перейти</button>
          </div>
        </div>
      </form>
    </div>
  </div>    
</center>
  

<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>