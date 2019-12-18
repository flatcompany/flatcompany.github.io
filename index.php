<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="css/style.css" />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    />
    <title>Document</title>
  </head>
  <body>
    <?php
      if($_COOKIE['user'] == ''):
    ?>


    <!-- <div class="section_1">
          <form class="log" method="POST" action="validation-form/check.php">
            <h1 class="auth">Регистрация</h1>
            <input class="log__in" type="text" name="login" id="login" placeholder="Введите логин" />
            <input class="log__in" type="password" name="pass" id="pass" placeholder="Введите пароль" />
            <input class="log__in" type="text" name="name" id="name" placeholder="Введите имя" />
            <button type="submit" class="log__btn">Регистрация</button>
          </form>
        </div> -->

    <div class="section_1">
      <form class="log" method="POST" action="validation-form/auth.php">
        <h1 class="auth">Авторизация</h1>
        <input class="log__in" type="text" name="login" id="login" placeholder="Введите логин"/>
        <input class="log__in" type="password" name="pass" id="pass" placeholder="Введите пароль"/>
        <button type="submit" class="log__btn">Войти</button>
      </form>
    </div>
      <?php else:?>
        <?php include 'main.php';?>           
            
    <?php endif;?>
  </body>
</html>
