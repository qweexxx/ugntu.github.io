<?php
    // session_start();
    // echo $_SESSION['email'];
    // session_unset();
?>  
<?php
    include("../inc/header.php");
    include("../function/function.php");
    if(!isset($_SESSION['email'])){
        header("location: /");
        exit;
    }
?>
    <section class="information persona">
        <div class="bread_crumb">
            <p>УГНТУ</p>
            <p class="transparency">Обучающимся</p>
        </div>
        <div class="information_text">
            <div class="avatar">
                <h3>Ваш профиль</h3>
                <img src="/assets/media/image/personal/personal.png" alt="avatar">
            </div>
            <div class="out">
                <p>Добро пожаловать!</p>
                <a href="/function/controllers/logout.php">Выйти</a>
            </div>
        </div>
    </section>
    <section class="personal">
        <?=fnGetPersonal($_SESSION['email'])?>
    </section>
<?php
    include("../inc/footer.php");
?>