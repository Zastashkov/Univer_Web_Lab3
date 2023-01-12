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

    <section class="main">
        <div class="main-wrapper">
            <p class="main-text">Форма обратной связи</p>
            <!-- устанавливаем форму на странице -->
            <form class="main-form" action="https://httpbin.org/post" method="POST" enctype="multipart/form-data">
                <!-- группируем элементы формы -->
                <fieldset class="form-fieldset">
                    <!-- создаем обязательное для заполнения текстовое поле для ввода ФИО -->
                    <label>
                        ФИО
                        <input class="form-input" type="text" name="name" placeholder="Ваше ФИО" value="Засташков Даниил Андреевич" required>
                    </label>
                    <!-- создаем обязательное для заполнения текстовое поле для ввода почты -->
                    <label>
                        E-mail
                        <input class="form-input" type="email" name="email" placeholder="Ваш email" value="a@mail.ru" required>
                    </label>
                    <br>
                    <!-- создаем обязательную для заполнения группу радиокнопок -->
                    <label>
                        Откуда узнали о нас
                        <input class="form-input" type="radio" value="Internet" name="source" checked  required>
                        Из интернета
                        <input class="form-input" type="radio" value="Friends" name="source" required>
                        Рассказал друг
                        <input class="form-input" type="radio" value="TV" name="source" required>
                        Из телевизора
                    </label>
                    <br>
                    <!-- создаем обязательный для заполнения выпадающий список -->
                    <label>Тип обращения
                        <select class="form-input" name="user-appeal" required>
                            <option value="complaint">Жалоба</option>
                            <option value="offer">Предложение</option>
                            <option value="review">Отзыв</option>
                        </select>
                    </label>
                    <br>
                    <!-- создаем обязательное для заполнения текстовое поле -->
                    <label>Текст
                        <textarea class="form-input" placeholder="Введите текст"> </textarea>
                    </label>
                    <br>
                    <!-- создаем обязательное для заполнения файловое поле -->
                    <label>
                        Файл
                        <input class="form-input" type="file" name="file" placeholder="Жалоба/предложение">
                    </label>
                    <br>
                    <!-- создаем обязательный для заполнения чекбокс -->
                    <label>
                        <input class="form-checkbox" type="checkbox" name="checked" value="1" required>
                        Даю согласие на обработку персональных данных
                    </label>
                    <br>
                    <!-- создаем кнопку отправить -->
                    <input class="submit" type="submit" value="Отправить">
                </fieldset>
            </form>
            <p class="name-group-date">Засташков Даниил Андреевич | 211-361 | 26.12.2022</p>
        </div>
    </section>

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