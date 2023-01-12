<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="main.css" type="text/css" />
  <title>211-361 Засташков ЛР 2</title>
</head>
<body>
<div class="page">
    <header class="header">
        <div class="container">
            <nav class="main-menu">
                <ul class="menu-list">
                    <li>
                        <a href="index.php">Моя страница</a>
                    </li>
                    <li>
                        <a href="#about">Обо мне</a>
                    </li>
                    <li>
                        <a href="#skills">Навыки</a>
                    </li>
                    <li>
                        <a href="#technologies">Технологии</a>
                    </li>
                    <li>
                        <a href="<?php
                        $name='Обратная связь';
                        $link='feedback.php';
                        $current_page=true;
                        echo $link;
                        ?>"
                           class=" <?php if ($current_page) echo "selected";
                           ?>">
                            <?php echo $name ?>
                        </a>
                    </li>
                    <li>
                        <a href="<?php
                        $name='Регистрация';
                        $link='registration.php';
                        $current_page=true;
                        echo $link;
                        ?>"
                           class=" <?php if ($current_page) echo "selected";
                           ?>">
                            <?php echo $name ?>
                        </a>
                    </li>
                </ul>
            </nav>
            <div class="text-center py-5" >
                <h1 class="name">Засташков Даниил Андреевич</h1>
                <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
                <h3>Разработчик мобильных приложений</h3>
                <a class="btn contact-me-btn" href="mailto:zast2020@mail.ru">Написать мне</a>
            </div>
        </div>
    </header>

  <main class="mainn">
    <div class="form-wrapper">
      <p><form class="main-form" action="https://httpbin.org/post" method="POST">
      <fieldset class="form-fieldsett">
        <label>Логин <input class="login" type="text" name="text-field" placeholder="Логин" required></label>
        <br>
        <label>Пароль <input class="password" type="password" name="text-field" placeholder="Пароль" required></label>
        <br>
        <label><span class="checkbox-wrapper"><input class="form-checkbox" type="checkbox" name="checked" value="1">Запомнить меня</span></label>
        <br>
        <input class="submit" type="submit" value="Зарегистрироваться">
      </fieldset>
    </form></p>
    </div>
  </main>

  <footer class="site-footer">
    <div class="container">
      <p>Email: zast2020@mail.ru</p>
      <p>Phone: +7(923)082-22-72</p>
      <p>&copy; Засташков Д. А.</p>
    </div>
  </footer>
</div>
</body>
</html>