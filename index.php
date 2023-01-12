<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
<!--    <title>211-361 Засташков ЛР 2</title>-->
    <link rel="stylesheet" href="main.css">
    <title>
        <?php
            $name = "Засташков Даниил 211-361 Лаб_3";
            echo $name
        ?>
    </title>
</head>
<body>
<header class="header">
    <div class="container">
        <nav class="main-menu">
            <ul class="menu-list">
                <li>
                    <a href="#main">Моя страница</a>
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

<main>
    <div class="container">
        <section id="about">
            <h1>Курсы web-разработки на платформе Udemy</h1>
            <figure class="avatar">
                <?php
                    echo '<img src="images/web_bootcamp';
                    echo date('s') % 2 + 1;
                    echo '.jpg" alt="Меняющаяся фотография">';
                ?>
<!--                <img src="images/person.svg" alt="Person">-->
            </figure>
            <p>
                Кстати, активно развивающиеся страны третьего мира будут призваны к ответу. Картельные сговоры не допускают ситуации, при которой многие известные личности, превозмогая сложившуюся непростую экономическую ситуацию, объединены в целые кластеры себе подобных. Повседневная практика показывает, что дальнейшее развитие различных форм деятельности способствует повышению качества новых предложений. Но многие известные личности обнародованы.
            </p>
        </section>

        <section id="skills">
            <h1>Технологии</h1>
            <p>
                <?php
                $mass = array('1. Элементы', '2. Списка', '3. Представлены', '4. Динамически');
                ?>
            <ul>
                <li><?=$mass[0];?></li>
                <li><?=$mass[1];?></li>
                <li><?=$mass[2];?></li>
                <li><?=$mass[3];?></li>
            </ul>
            </p>
            <div class="text-right">
                <a class="btn" href="skills.html">Подробнее</a>
            </div>
        </section>
    </div>
</main>

<section id="key-skills" class="key-skills">
    <h2>Ключевые навыки</h2>

    <p class="table-skills">
    <table>
        <tr>
            <th>C</th>
            <th>Java</th>
            <th>Linux</th>
            <th>SQL</th>
            <th>Bash</th>
        </tr>
    </table>
    </p>
</section>

<footer class="site-footer">
    <div class="container">
        <p>Email: zast2020@mail.ru</p>
        <p>Phone: +7(923)082-22-72</p>
        <p>&copy; Засташков Д. А.</p>
        <p>
            <?php
            echo date('Сформировано d.m.Y в G:i:s', time()+3600*3);
            ?>
        </p>
    </div>
</footer>
</body>
</html>