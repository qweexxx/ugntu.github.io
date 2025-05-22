<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация</title>
    <link rel="stylesheet" href="/assets/style/style.css">
</head>
<body>
    <section class="form">
        <div class="container">
            <div class="form">
                <div class="logotype">
                    <img src="/assets/media/image/form/logo.png" alt="Логотип">
                    <h1>УГНТУ</h1>
                </div>
                <div class="gosuslugi">
                    <img src="/assets/media/image/form/logo_gos.png" alt="Логотип госуслуг">
                    <p>Зарегистрироваться через ГОСУСЛУГИ</p>
                </div>
                <div class="variant">
                    <div class="title">
                        <p>Или Email</p>
                    </div>
                    <div class="line"><hr></div>
                </div>
                <form action="/function/controllers/registration.php" method="post">
                    <div class="group_input">
                        <label for="FIO">ФИО</label>
                        <input type="text" id="FIO" name="fio" required>
                    </div>
                    <div class="group_input">
                        <label for="telephone">Телефон</label>
                        <input type="text" id="telephone" name="telephone" required>
                    </div>
                    <div class="group_input">
                        <label for="group">Группа</label>
                        <input type="text" id="group" name="group">
                    </div>   
                    <div class="group_input">
                        <label for="email">EMAIL</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    <div class="group_input">
                        <label for="password">Пароль</label>
                        <input type="password" id="password" name="password" required>
                    </div>
                    <button type="submit">
                        Зарегистрироваться
                        <img src="/assets/media/image/form/button.png" alt="button">
                    </button>
                    <p>Регистрируясь в УГНТУ, вы соглашаетесь с нашей Политикой конфиденциальности и Условиями предоставления услуг</p>
                </form>
                <p>Вы уже зарегистрированы? <a href="authorization.php">Авторизоваться</a></p>
            </div>
            <div class="image">
                <img src="/assets/media/image/form/pattern.png" alt="pattern">
            </div>
            
        </div>
    </section>
</body>
</html>