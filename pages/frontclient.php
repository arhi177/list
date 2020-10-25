
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Клиенты</title>


<div class="container">
</head>
<body>  
    <table>
        <thead>
          <tr>
              <th>Имя</th>
              <th>Возраст</th>
              <th>Удаление</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach($clients as $client) : ?>
            <tr>
              <td><?=$client->name?></td>
              <td><?=$client->age?></td>
              <td><a  href="http://work/scrips/delClient.php?id=<?=$client->id?>" class="waves-effect waves-light btn">Удалить</a>
            </td>
          </tr>  
        </tbody>
        <?php endforeach; ?>
      </table>  
</div>
<br>
<div class="container">
  <center>
  <a href="http://work/index.php?page=register" class="waves-effect waves-light btn">Регистарция</a>
</center>
          </div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>