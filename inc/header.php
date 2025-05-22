<?php
    session_start();
    if(isset($_SESSION['email'])){
        $menu = '<a href="/personal/personal.php">
                    <img src="/assets/media/image/personal.png" alt="personal">
                </a>';
    }else{
        $menu = '<a href="/personal/authorization.php">
                    <img src="/assets/media/image/personal.png" alt="personal">
                </a>';
    }
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Навигатор студента</title>
    <link rel="stylesheet" href="/assets/style/style.css">
</head>
<body>
    <section class="aside_menu" id="menu">
        <div class="aside_content">
            <div class="aside_top">
                <div class="logotype">
                    <a href="/">
                        <img src="/assets/media/image/logo.png" alt="logotype">
                    </a>
                </div>
                <div class="burger" id="burger">
                    <img src="/assets/media/image/burger.png" alt="burger">
                </div>
            </div>
            <div class="aside_bottom">
                <div>
                    <?=$menu?>
                </div>
                <div>
                    <a href="">
                        <img src="/assets/media/image/view.png" alt="view">
                    </a>
                </div>
                <div>
                    <a href="https://raspisanie.rusoil.net/">
                        <img src="/assets/media/image/list.png" alt="list">
                    </a>
                </div>
                <div class="language">
                    <a href="">
                        <img src="/assets/media/image/language.png" alt="language">
                    </a>
                </div>
                <div>
                    <a href="">
                        <img src="/assets/media/image/video.png" alt="video">
                    </a>
                </div>
            </div>
        </div>
        <div class="aside_burger">
            <div class="title">
                <h1>УГНТУ</h1>
            </div>
            <div class="aside_menu">
                <a href="/library.php">Библиотека знаний</a>
            </div>
        </div>
    </section>
    <section class="main_content">
        <header>
            <a class="logotype">
                <img class="adaptive" src="/assets/media/image/logo.png" alt="logotype">
                <h1>УГНТУ</h1>
            </a>
            <nav>
                <img class="adaptive language" src="/assets/media/image/language.png" alt="language">
                <ul>
                    <li class="adaptive">
                        <a href="">
                            <img src="/assets/media/image/personal.png" alt="personal">
                        </a>
                    </li>
                    <li class="adaptive">
                        <a href="">
                            <img src="/assets/media/image/list.png" alt="list">
                        </a>
                    </li>
                    <li class="search">
                        <img src="/assets/media/image/search.png" alt="search">
                    </li>
                    <li class="adaptive_burger">
                        <a href="">
                            <img src="assets/media/image/burger_sm.png" alt="burger_sm">
                        </a>
                    </li>
                </ul>
            </nav>
        </header>