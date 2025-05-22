-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 21 2025 г., 18:50
-- Версия сервера: 8.0.30
-- Версия PHP: 8.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `ugntu`
--
CREATE DATABASE IF NOT EXISTS `ugntu` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci;
USE `ugntu`;

-- --------------------------------------------------------

--
-- Структура таблицы `career`
--

DROP TABLE IF EXISTS `career`;
CREATE TABLE `career` (
  `id_career` int NOT NULL,
  `name_career` varchar(100) NOT NULL,
  `information` text NOT NULL,
  `image` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Очистить таблицу перед добавлением данных `career`
--

TRUNCATE TABLE `career`;
--
-- Дамп данных таблицы `career`
--

INSERT INTO `career` (`id_career`, `name_career`, `information`, `image`) VALUES
(1, 'ООО “ЛУКОЙЛ-Инжиниринг”', 'Обслуживание и ремонт нефтегазового оборудования (насосы, компрессоры, трубопроводы). Проведение планово-предупредительных ремонтов. Участие в монтаже и пусконаладке оборудования.', NULL),
(2, 'ООО “ЛУКОЙЛ-Инжиниринг”', 'Обслуживание и ремонт нефтегазового оборудования (насосы, компрессоры, трубопроводы). Проведение планово-предупредительных ремонтов. Участие в монтаже и пусконаладке оборудования.', '/assets/media/image/career/1.png'),
(3, 'ООО “ЛУКОЙЛ-Инжиниринг”', 'Обслуживание и ремонт нефтегазового оборудования (насосы, компрессоры, трубопроводы). Проведение планово-предупредительных ремонтов. Участие в монтаже и пусконаладке оборудования.', '/assets/media/image/career/2.png');

-- --------------------------------------------------------

--
-- Структура таблицы `catalog`
--

DROP TABLE IF EXISTS `catalog`;
CREATE TABLE `catalog` (
  `id_catalog` int NOT NULL,
  `name_catalog` varchar(300) NOT NULL,
  `information_catalog` text NOT NULL,
  `type` varchar(300) NOT NULL,
  `block_id` varchar(100) NOT NULL,
  `block_type` varchar(100) NOT NULL,
  `download_link` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Очистить таблицу перед добавлением данных `catalog`
--

TRUNCATE TABLE `catalog`;
--
-- Дамп данных таблицы `catalog`
--

INSERT INTO `catalog` (`id_catalog`, `name_catalog`, `information_catalog`, `type`, `block_id`, `block_type`, `download_link`) VALUES
(1, 'Разработка нефтяных и газовых месторождений', 'Содержат требования к структуре, содержанию и оформлению курсовой работы...', 'Курсовая работа', 'first', 'first', ''),
(2, 'Сооружение и ремонт', 'Содержат требования к структуре...', 'Дипломная работа', 'secondary', 'base', ''),
(3, 'Сооружение и ремонт', 'Содержат требования к структуре...', 'Дипломная работа', 'third', 'white', ''),
(4, 'Сооружение и ремонт', 'Содержат требования к структуре...', 'Дипломная работа', 'fourth', 'base', '');

-- --------------------------------------------------------

--
-- Структура таблицы `club_conference`
--

DROP TABLE IF EXISTS `club_conference`;
CREATE TABLE `club_conference` (
  `id_club_conference` int NOT NULL,
  `name_club_conference` varchar(100) NOT NULL,
  `alias` varchar(100) DEFAULT NULL,
  `link` varchar(100) NOT NULL,
  `background` varchar(100) NOT NULL,
  `modal` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Очистить таблицу перед добавлением данных `club_conference`
--

TRUNCATE TABLE `club_conference`;
--
-- Дамп данных таблицы `club_conference`
--

INSERT INTO `club_conference` (`id_club_conference`, `name_club_conference`, `alias`, `link`, `background`, `modal`) VALUES
(1, 'Моделирование', 'model', 'modal', '/assets/media/image/card/model.png', 'В сентябре 2017 кафедры «Математика и математическое моделирование» и «Информатика и информационно-коммуникационные технологии» объединились и стала кафедрой «Цифровые технологии и моделирование». С 2017 года по январь 2021  кафедрой заведовал д-р техн. наук Сафин Рашит Рафаилович. В настоящие время заведующий кафедрой Попов Денис Владимирович.'),
(2, 'Геоэкология', 'geo', 'modal', '/assets/media/image/card/geo.png', 'Уфимский государственный нефтяной технический университет представлял доцент кафедры охраны окружающей среды и рационального использования природных ресурсов Института экосистем бизнеса и креативных индустрий Азамат Сулейманов с докладом на тему «Цифровое картографирование почвенного органического углерода методами машинного обучения в степных ландшафтах Зауралья (Россия)». Доклад вызвал большой интерес у участников конференции. В ходе дискуссий о важности использования машинного обучения в исследованиях и картографировании ландшафтов было принято решение о внесении данного направления в тематику будущих конференций.'),
(3, 'Робототехника', 'poboto', 'modal', '/assets/media/image/card/robot.png', 'Разработка новых технологических и цифровых решений в области применения VR-тренажеров и AR-технологий для разработки и взаимодействия с технологическим оборудованием нефтегазовой промышленности; создание тренажеров для повышения скорости обучения сотрудников и повышения уровня промышленной безопасности на предприятиях.'),
(4, 'Инновационные технологии в нефтепереработке', NULL, 'https://rusoil.net/ru', 'color', NULL),
(5, 'Экономика и управление в нефтегазовой отрасли', NULL, 'https://rusoil.net/index.php/ru/node/4863', 'color', NULL),
(6, 'Разработка материалов в нефтегазовой промышленности', NULL, 'https://rusoil.net/ru', 'color', NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `event`
--

DROP TABLE IF EXISTS `event`;
CREATE TABLE `event` (
  `id_event` int NOT NULL,
  `name_event` varchar(300) NOT NULL,
  `information_event` text NOT NULL,
  `date_event` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Очистить таблицу перед добавлением данных `event`
--

TRUNCATE TABLE `event`;
--
-- Дамп данных таблицы `event`
--

INSERT INTO `event` (`id_event`, `name_event`, `information_event`, `date_event`) VALUES
(1, 'Интеллектуальный штурм: Нефтяной прорыв 2025', 'Готовы ли вы проверить свои знания, проявить креативность и внести свой вклад в будущее нефтегазовой отрасли?', '2025-05-17'),
(2, 'Интеллектуальный штурм: Нефтяной прорыв 2025', 'Готовы ли вы проверить свои знания, проявить креативность и внести свой вклад в будущее нефтегазовой отрасли?', '2025-05-17'),
(3, 'Интеллектуальный штурм: Нефтяной прорыв 2025', 'Готовы ли вы проверить свои знания, проявить креативность и внести свой вклад в будущее нефтегазовой отрасли?', '2025-05-17');

-- --------------------------------------------------------

--
-- Структура таблицы `library`
--

DROP TABLE IF EXISTS `library`;
CREATE TABLE `library` (
  `id_library` int NOT NULL,
  `name` varchar(200) DEFAULT NULL,
  `information` text NOT NULL,
  `link` varchar(200) DEFAULT NULL,
  `image` varchar(200) DEFAULT NULL,
  `block_type` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Очистить таблицу перед добавлением данных `library`
--

TRUNCATE TABLE `library`;
--
-- Дамп данных таблицы `library`
--

INSERT INTO `library` (`id_library`, `name`, `information`, `link`, `image`, `block_type`) VALUES
(1, 'Бурение нефтяных и газовых скважин', 'Учебник для студентов вузов, обучающихся по направлению “Нефтегазовое дело”. Рассмотрены современные технологии бурения, оборудование и инструменты.', 'https://ugntu.ru/index.php/ru/page/burenie-neftyanykh-i-gazovykh-skvazhin-bngs', '/assets/media/image/drilling.png', 'white'),
(2, NULL, 'Ищите нужные учебники, монографии, статьи и диссертации по ключевым словам, авторам или дисциплинам. Читайте прямо на сайте или скачивайте для работы в оффлайн-режиме.', NULL, NULL, 'information'),
(3, 'Трубопроводный транспорт нефти и газа', 'Рассмотрены вопросы проектирования, строительства и эксплуатации магистральных трубопроводов для транспортировки нефти и газа. Описаны технологии защиты трубопроводов от коррозии и методы контроля их технического состояния.', 'https://ugntu.ru/ru/page/fakultet-truboprovodnogo-transporta-ftt', NULL, 'secondary'),
(4, 'Геология нефти и газа', 'Учебник, в котором изложены основы геологии нефти и газа.', 'https://rusoil.net/ru/page/geologiya-i-razvedka-neftyanykh-i-gazovykh-mestorozhdeniy-geologiya', '/assets/media/image/geology.png', 'main');

-- --------------------------------------------------------

--
-- Структура таблицы `team_studio`
--

DROP TABLE IF EXISTS `team_studio`;
CREATE TABLE `team_studio` (
  `id_team_studio` int NOT NULL,
  `name_team_studio` varchar(100) NOT NULL,
  `information` text NOT NULL,
  `path` varchar(100) NOT NULL,
  `bg` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Очистить таблицу перед добавлением данных `team_studio`
--

TRUNCATE TABLE `team_studio`;
--
-- Дамп данных таблицы `team_studio`
--

INSERT INTO `team_studio` (`id_team_studio`, `name_team_studio`, `information`, `path`, `bg`) VALUES
(1, 'Вокальная студия “Созвездие”', 'Любишь петь? Присоединяйся к нашей дружной вокальной студии! У нас ты научишься правильно дышать, красиво звучать и уверенно держаться на сцене.', '/assets/media/image/teams/microphone.png', 'color'),
(2, 'Танцевальный коллектив “Энергия”', 'Танцуй вместе с нами! Современные танцы, хип-хоп, брейк-данс, народные танцы – выбирай свой стиль и зажигай на сцене! Участвуй в танцевальных баттлах, фестивалях.', '/assets/media/image/teams/microphone_w.png', '/assets/media/image/teams/energy.png'),
(3, 'Театральная студия “Маска”', 'Мечтаешь стать актером? В нашей театральной студии ты научишься актерскому мастерству, сценической речи, движению и импровизации. Играй в....', '/assets/media/image/teams/theatre.png', 'color'),
(4, 'Команда КВН “Нефтяной юмор”', 'Любишь шутить и смешить людей? Присоединяйся к нашей команде КВН! Пиши смешные шутки, придумывай оригинальные номера и выступай на сцене КВН!', '/assets/media/image/teams/kvn.png', 'color');

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id_user` int NOT NULL,
  `fio` varchar(300) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `group_user` varchar(10) NOT NULL,
  `email` varchar(300) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Очистить таблицу перед добавлением данных `user`
--

TRUNCATE TABLE `user`;
-- --------------------------------------------------------

--
-- Структура таблицы `user_team`
--

DROP TABLE IF EXISTS `user_team`;
CREATE TABLE `user_team` (
  `id_user_team` int NOT NULL,
  `id_user` int NOT NULL,
  `id_team` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Очистить таблицу перед добавлением данных `user_team`
--

TRUNCATE TABLE `user_team`;
-- --------------------------------------------------------

--
-- Структура таблицы `video`
--

DROP TABLE IF EXISTS `video`;
CREATE TABLE `video` (
  `id_video` int NOT NULL,
  `name_video` varchar(300) NOT NULL,
  `alias` varchar(100) NOT NULL,
  `link_video` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Очистить таблицу перед добавлением данных `video`
--

TRUNCATE TABLE `video`;
--
-- Дамп данных таблицы `video`
--

INSERT INTO `video` (`id_video`, `name_video`, `alias`, `link_video`) VALUES
(1, 'Теплоэнергетика. Проморолик', 'teploenergetika', 'https://rutube.ru/play/embed/c9c394effc59c19a5ed0fae7f2759dc4'),
(2, 'Выступление студентов горно-нефтяного факультета на «Студенческой весне-2025»', 'studencheskaya_vesna', 'https://rutube.ru/play/embed/0dc021e097130ad8688c24bfc7334200'),
(3, 'Дежурный NEFTYMEDIA | ВЫПУСК №6 | Институт экосистем бизнеса и креативных индустрий', 'neftymedia_6', 'https://rutube.ru/play/embed/84f8e44746ae253604826adc3ef36bee');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `career`
--
ALTER TABLE `career`
  ADD PRIMARY KEY (`id_career`);

--
-- Индексы таблицы `catalog`
--
ALTER TABLE `catalog`
  ADD PRIMARY KEY (`id_catalog`);

--
-- Индексы таблицы `club_conference`
--
ALTER TABLE `club_conference`
  ADD PRIMARY KEY (`id_club_conference`);

--
-- Индексы таблицы `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id_event`);

--
-- Индексы таблицы `library`
--
ALTER TABLE `library`
  ADD PRIMARY KEY (`id_library`);

--
-- Индексы таблицы `team_studio`
--
ALTER TABLE `team_studio`
  ADD PRIMARY KEY (`id_team_studio`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Индексы таблицы `user_team`
--
ALTER TABLE `user_team`
  ADD PRIMARY KEY (`id_user_team`);

--
-- Индексы таблицы `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id_video`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `career`
--
ALTER TABLE `career`
  MODIFY `id_career` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `catalog`
--
ALTER TABLE `catalog`
  MODIFY `id_catalog` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `club_conference`
--
ALTER TABLE `club_conference`
  MODIFY `id_club_conference` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `event`
--
ALTER TABLE `event`
  MODIFY `id_event` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `library`
--
ALTER TABLE `library`
  MODIFY `id_library` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `team_studio`
--
ALTER TABLE `team_studio`
  MODIFY `id_team_studio` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `user_team`
--
ALTER TABLE `user_team`
  MODIFY `id_user_team` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT для таблицы `video`
--
ALTER TABLE `video`
  MODIFY `id_video` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
