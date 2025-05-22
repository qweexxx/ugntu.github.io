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
            <h3>Навигатор студента УГНТУ: Твой путь к успеху!</h3>
            <p>В УГНТУ – не только учеба, но и яркая студенческая жизнь! Здесь вы найдете все, что нужно для развития своих талантов, участия в интересных проектах и получения поддержки.</p>
        </div>
    </section>
    <section class="advice">
        <div class="advice_information">
            <h3>Студенческий совет</h3>
            <p>Участвуйте в управлении университетом, представляйте интересы студентов, организуйте мероприятия и делайте студенческую жизнь лучше!</p>
            <img src="/assets/media/image/advice/main.png" alt="advice_main" class="adaptive">
            <p>Вместе со Студенческим советом ты сможешь:</p>
            <div class="list_container">
                <div class="list">
                    <div class="list_item">
                        <img src="/assets/media/image/list/1.png" alt="1">
                        <p>Вносить предложения по улучшению учебного процесса и бытовых условий в общежитиях.</p>
                    </div>
                    <div class="list_item">
                        <img src="/assets/media/image/list/2.png" alt="2">
                        <p>Участвовать в организации спортивных соревнований, творческих фестивалей и научных конференций.</p>
                    </div>
                    <div class="list_item">
                        <img src="/assets/media/image/list/3.png" alt="3">
                        <p>Представлять интересы студентов на встречах с администрацией университета.</p>
                    </div>
                </div>
                <img src="/assets/media/image/advice/secondary.png" alt="advice_secondary">
            </div>
        </div>
        <div class="advice_image">
            <img src="/assets/media/image/advice/main.png" alt="advice_main">
        </div>
    </section>
    <?=fnGetClubsConferences()?>
    <?=fnGetTeamsStudios()?>
    <?=fnGetCareer()?>
<?php
    include("inc/footer.php");
?>