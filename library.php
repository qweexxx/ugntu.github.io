<?php
    include("inc/header.php");
    include("function/function.php");
?>
    <section class="information">
        <div class="bread_crumb">
            <p>УГНТУ</p>
            <p class="transparency">Обучающимся</p>
        </div>
        <div class="information_text">
            <h3>Библиотека знаний УГНТУ: Всё для успешной учебы!</h3>
            <p>Добро пожаловать в ваш персональный навигатор по знаниям! Здесь собраны все ресурсы, которые помогут вам в учебе: от учебников и методичек до онлайн-курсов и баз данных.</p>
        </div>
    </section>
    <section class="image">
        <img src="/assets/media/image/library.png" alt="library">
    </section>
    <?=fnGetLibrary()?>
    <?=fnGetCatalog()?>
    <?=fnGetVideo()?>
    <?=fnGetEvent()?>

<?php
    include("inc/footer.php");
?>