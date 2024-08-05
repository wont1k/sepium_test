<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>test sepium</title>
  <link rel="stylesheet" href="public/css/styles.css">
  <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
  <script src="public/js/jquery.js"> </script>
  </head>
<body>
  <div class="main-block">
  
  <form id = "addUserForm" method="POST"> 
    <h1>Создание пользователя</h1>
    <fieldset>
      <div  class="account-details">
        
        <div><label>Имя пользователя</label><input type="text" name="name" required></div>
        <div><label>Пароль</label><input type="password" name="password" required></div>
        <div><label>E-mail</label><input type="text" name="email" required></div>
      </div>
    </fieldset>
    <button type="submit">Добавить пользователя</button>
  </form>
  </div> 
  <table>
  <caption>Пользователи</caption>
  <thead>
    <tr>
      <th scope="col">Имя пользователя</th>
      <th scope="col">E-mail</th>
      <th scope="col">Дата создания пользователя</th>
    </tr>
  </thead>
  <tbody id="user-table">
    <?php foreach ($users as $user){  if (!($user["name"] == "admin")) {?>
    <tr id="row-<?php echo $user['id']?>">
      <th scope="col"><?php echo $user['name']?></th>
      <th scope="col"><?php echo $user['email']?></th>
      <th scope="col"><?php echo $user['created_at']?></th>
      <?php if ($_SESSION['logged_user']['privilege'] == 1) {?>
      <td data-label="delete"> <a href = '#' <?php echo 'id ="'. $user['id'] .'"' ?> class="del_button">Удалить пользователя</a></td>
      <?php }}}?> 
    </tr>
  </tbody>
  </table>
  
  <?php if  (!(isset($_SESSION['logged_user']))) { ?>
  <div class = "log-block">
  <form id="autUser" method="POST"> 
    <h1>Войти как администратор</h1>
    <fieldset>
      <div  class="account-check">
        <div><label>Имя пользователя</label><input type="text" name="userName" required></div>
        <div><label>Пароль</label><input type="password" name="userPassword" required></div>
      </div>
    </fieldset>
      <button type="submit">Войти</button>
    </div>
  </form>
  <?php }
  else{ ?>
  <form id="out_user" method="POST"> 
    <a><button type="submit">Выйти</button></a>
  </form>
  <?php } ?>
  </body>
</html>