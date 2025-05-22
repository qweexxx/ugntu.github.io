<?php
    include("connect.php");

    function fnGetClubsConferences(){
        global $connect;

        $sql = "SELECT * FROM `club_conference`";

        $result = $connect->query($sql);
        $data = '
        <section class="clubs_conferences">
            <h3>Научные кружки и конференции</h3>
            <div class="cards">';
        $modal = "";
        foreach ($result as $value) {
            if($value['background'] == "color"){
                $top_card = sprintf('
                <div class="card info">
                    <div class="front">
                        <p>%s</p>',$value['name_club_conference']);
                $bottom_card = '</div></div>';
            }elseif(str_contains($value['background'], '/assets/media/image')){
                $top_card = sprintf('
                <div class="card club">
                    <div class="front">
                        <div class="title">
                            <p>%s</p>
                        </div>',$value['name_club_conference']);
                $bottom_card = sprintf('</div><img class="bg" src="%s" alt="%s"></div>', $value['background'], $value['name_club_conference']);
            }
            if ($value["link"] == "modal") {
                $link_card = sprintf('<a class="link modal_btn" id="%s">
                        <img src="/assets/media/image/link_card.png" alt="link">
                    </a>', $value['alias']);
                $modal .= fnGetModal($value, "text");
            }else{
                $link_card = sprintf('<a href="%s" class="link">
                        <img src="/assets/media/image/link_card.png" alt="link">
                    </a>', $value['link']);
            }
            $data .= $top_card . $link_card . $bottom_card;
        }
        $data .= '</div>  
        </section>' . $modal;
        return $data;
    }
    function fnGetCareer(){
        global $connect;

        $sql = "SELECT * FROM `career`";

        $result = $connect->query($sql);
        $data = '
        <section class="career">
            <div class="career_information">
                <h3>Центр карьеры</h3>
                <p>Стажировки, практики, вакансии от ведущих компаний нефтегазовой отрасли. Подготовка к собеседованиям, составление резюме и индивидуальные консультации.</p>
                <div class="buttons_carousel">
                    <button class="button_carousel" id="prev">
                        <img src="/assets/media/image/career/left.png" alt="left_position">
                    </button>
                    <button class="button_carousel" id="next">
                        <img src="/assets/media/image/career/right.png" alt="right_position">
                    </button>
                </div>
            </div>
            <div class="wrapper_cards">
                <div class="career_cards">';
        foreach ($result as $value) {
            if($value['image'] != null){
                $data .= sprintf('
                <div class="career_card">
                    <img src="%s" alt="%s">
                    <div class="information">
                        <h4>%s</h4>
                        <p>%s</p>
                    </div>
                </div>', $value['image'], $value['name_career'], $value['name_career'], $value['information']);
            }else{
                $data .= sprintf('
                <div class="career_card">
                    <div class="information">
                        <h4>%s</h4>
                        <p>%s</p>
                    </div>
                </div>', $value['name_career'], $value['information']);
            }
        }
        $data .= '
                </div>
            </div>
        </section>';
        return $data;
    }
    function fnGetTeamsStudios(){
        global $connect;

        $sql = "SELECT * FROM `team_studio`";

        $result = $connect->query($sql);
        $data = '
        <section class="teams_studios" id="teams_studios">
            <div class="ts_container">
                <div class="team_studio">
                    <h3>Творческие коллективы и студии</h3>
                    <div class="cards">';
        foreach ($result as $value) {
            if($value['bg'] == "color"){
                $data .= sprintf('
                <div class="card">
                    <div class="card_content">
                        <img class="card_image" src="%s" alt="%s">
                        <div class="card_information">
                            <h4>%s</h4>
                            <p>%s</p>
                        </div>
                        <a class="link_img teams" data-id="%s">
                            Присоединиться
                            <div class="link">
                                <img src="/assets/media/image/teams/link.png" alt="link">
                            </div>
                        </a>
                    </div>
                </div>', $value['path'], $value['name_team_studio'], $value['name_team_studio'], $value['information'], $value['id_team_studio']);
            }elseif(str_contains($value['bg'], '/assets/media/image')){
                $data .= sprintf('
                <div class="card">
                    <img src="%s" alt="card_bg" class="card_bg">
                    <div class="card_content contrast">
                        <img class="card_image" src="%s" alt="%s">
                        <div class="card_information">
                            <h4>%s</h4>
                            <p>%s</p>
                        </div>
                        <a class="link_img teams" data-id="%s">
                            Присоединиться
                            <div class="link">
                                <img src="/assets/media/image/teams/link.png" alt="link">
                            </div>
                        </a>
                    </div>
                </div>', $value['bg'], $value['path'], $value['name_team_studio'], $value['name_team_studio'], $value['information'], $value['id_team_studio']);
            }
        }
        $data .= '
                    </div>
                </div>
                <img class="bg" src="/assets/media/image/teams/bg.png" alt="bg">
            </div>
        </section>';
        return $data;
    }
    function fnGetLibrary(){
        global $connect;

        $sql = "SELECT * FROM `library`";

        $result = $connect->query($sql);

        $data = '
        <section class="library">
            <div class="library">
                <div class="library_title">
                    <h3>Электронная библиотека </h3>
                    <h3 class="rotate">“Нефтяник”</h3>
                </div>
                <div class="library_information">';
        foreach ($result as $value) {
            if ($value['block_type'] == 'white') {
                $data .= sprintf('
                <div class="library_card %s">
                    <div class="library_card_front">
                        <div class="card_information">
                            <h4>%s</h4>
                            <p>%s</p>
                        </div>
                        <a href="%s" class="link_img" target="_blank">
                            Читать на сайте
                            <div class="link">
                                <img src="/assets/media/image/teams/link.png" alt="link">
                            </div>
                        </a>
                    </div>
                    <div class="library_card_back">
                        <img src="%s" alt="drilling">
                    </div>
                </div>', $value['block_type'], $value['name'], $value['information'], $value['link'], $value['image']);
            } elseif($value['block_type'] == 'information') {
                $data .= sprintf('
                <div class="library_card %s">
                    <p>%s</p>
                </div>', $value['block_type'], $value['information']);
            } elseif($value['block_type'] == 'secondary') {
                $data .= sprintf('
                <div class="library_card %s">
                    <div class="card_information">
                        <h4>%s</h4>
                        <p>%s</p>
                    </div>
                    <a href="%s" class="link_img" target="_blank">
                        Читать на сайте
                        <div class="link">
                            <img src="/assets/media/image/teams/link.png" alt="link">
                        </div>
                    </a>
                </div>', $value['block_type'], $value['name'], $value['information'], $value['link']);
            } elseif($value['block_type'] == 'main') {
                $data .= sprintf('
                <div class="library_card %s">
                    <div class="library_card_front">
                        <div class="card_information">
                            <h4>%s</h4>
                            <p>%s</p>
                        </div>                        
                        <a href="%s" class="link_img" target="_blank">
                            Читать на сайте
                            <div class="link">
                                <img src="/assets/media/image/teams/link.png" alt="link">
                            </div>
                        </a>
                    </div>
                    <div class="library_card_back">
                        <img src="%s" alt="geology">
                    </div>
                </div>', $value['block_type'], $value['name'], $value['information'], $value['link'], $value['image']);
            }
            
        }
        $data .= '
                </div>
            </div>
        </section>';
        return $data;
    }
    function fnGetCatalog(){
        global $connect;

        $sql = "SELECT * FROM `catalog`";

        $result = $connect->query($sql);
        
        $data = '
        <section class="catalog">
            <h3>Каталог методических указаний</h3>
            <div class="catalog">';

        foreach ($result as $value) {
            if($value["block_type"] == "first"){
                $data .= sprintf('
                <div class="instruction" id="%s">
                    <div class="instruction_front">
                        <div class="links_instruction">
                            <div class="name_instruction">
                                <img src="/assets/media/image/name_inst.png" alt="name_inst">
                                <p>%s</p>
                            </div>
                            <a class="link">
                                <img src="/assets/media/image/link_card.png" alt="link_card">
                            </a>
                        </div>
                        <div class="information">
                            <h4>%s</h4>
                            <p>%s</p>
                            <a href="%s" download class="link_img">
                                Скачать
                                <div class="link">
                                    <img src="/assets/media/image/teams/link.png" alt="link">
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="instruction_back">
                        <img src="/assets/media/image/catalog.png" alt="instruction_back">
                    </div>
                </div>', $value['block_id'], $value['type'], $value['name_catalog'], $value['information_catalog'], $value['download_link']);
            }elseif($value["block_type"] == "base"){
                $data .= sprintf('
                <div class="instruction" id="%s">
                    <div class="links_instruction">
                        <div class="name_instruction adaptive">
                            <img src="/assets/media/image/name_inst_w.png" alt="inst">
                            <p>%s</p>
                        </div>
                        <a class="link">
                            <img src="/assets/media/image/link_card_s.png" alt="link_card_s">
                        </a>
                    </div>
                    <div class="information">
                        <h4>%s</h4>
                        <p>%s</p>
                        <a href="%s" download class="link_img">
                            Скачать
                            <div class="link">
                                <img src="/assets/media/image/teams/link.png" alt="link">
                            </div>
                        </a>
                    </div>
                </div>', $value['block_id'], $value['type'], $value['name_catalog'], $value['information_catalog'], $value['download_link']);
            }elseif($value["block_type"] == "white"){
                $data .= sprintf('
                <div class="instruction white" id="%s">
                    <div class="links_instruction">
                        <div class="name_instruction adaptive">
                            <img src="/assets/media/image/name_inst.png" alt="name_inst">
                            <p>%s</p>
                        </div>
                        <a class="link">
                            <img src="/assets/media/image/link_card.png" alt="link_card">
                        </a>
                    </div>
                    <div class="information">
                        <h4>%s</h4>
                        <p>%s</p>
                        <a href="%s" download class="link_img">
                            Скачать
                            <div class="link">
                                <img src="/assets/media/image/teams/link.png" alt="link">
                            </div>
                        </a>
                    </div>
                </div>', $value['block_id'], $value['type'], $value['name_catalog'], $value['information_catalog'], $value['download_link']);
            }
        }

        $data .= '</div></section>';
        return $data;
    }
    function fnGetVideo(){
        global $connect;

        $sql = "SELECT * FROM `video`";

        $result = $connect->query($sql);
        
        $data = ' 
        <section class="video">
            <div class="video_information">
                <h3>Видеолекции и записи вебинаров</h3>
                <p>Пропустили лекцию? Хотите повторить сложный материал? Смотрите видеозаписи лекций и вебинаров в удобное для вас время.</p>
                <a href="https://rutube.ru/channel/24777802/" class="link_img" target="_blank">
                    Другие видеолекции
                    <div class="link">
                        <img src="/assets/media/image/teams/link.png" alt="link">
                    </div>
                </a>
            </div>
            <div class="video_content">';
        $modal = '';
        foreach ($result as $value) {
            $data .= sprintf('
            <div class="video">
                <img src="/assets/media/image/video/%s.png" alt="%s" class="preview">
                <a class="play modal_btn" id="%s">
                    <img src="/assets/media/image/video/play.png" alt="Кнопка воспроизведения">
                </a>
            </div>', $value['alias'], $value['name_video'], $value['alias']);
            $modal .= fnGetModal($value, "video");
        }
        $data .= '</div></section>' . $modal;
        return $data;
    }
    function fnGetEvent(){
        global $connect;

        $sql = "SELECT * FROM `event`";

        $result = $connect->query($sql);
        $data = '
        <section class="event">
            <div class="event_information">
                <h3>Мероприятия УГНТУ</h3>
                <p>Скучать не придется! Самые яркие события, интересные встречи, полезные мастер-классы – все это ждет тебя в нашем календаре мероприятий.</p>
            </div>';
        $table_main = '
            <table class="main">
                <thead>
                    <tr>
                        <th>Мероприятие</th>
                        <th>Описание</th>
                        <th>Дата</th>
                    </tr>
                </thead>
                <tbody>';
        $table_adaptive = '
            <table class="adaptive">
                <thead>
                    <tr>
                        <th>Мероприятие, описание, дата</th>
                    </tr>
                </thead>
                <tbody>';
        foreach ($result as $value) {
            $date = preg_replace('#^(\d{4})-(\d{2})-(\d{2})$#', '\3.\2.\1', $value['date_event']);
            $table_main .= sprintf('
            <tr>
                <td><h4>%s</h4></td>
                <td>%s</td>
                <td><h4>%s</h4></td>
            </tr>', $value['name_event'], $value['information_event'], $date);
            $table_adaptive .= sprintf('
            <tr>
                <td>
                    <h4>%s</h4>
                    <p>%s</p>
                    <h4>%s</h4>
                </td>
            </tr>', $value['name_event'], $value['information_event'], $date);
        }
        $table_main .= '
            </tbody>
        </table>';
        $table_adaptive .= '
            </tbody>
        </table>';
        $data .= $table_main . $table_adaptive . "</section>";
        return $data;
    }
    function fnGetModal($value, $type){
        if($type == "text"){
            return sprintf('
            <div class="modal" id="for_%s">
                <div class="modal_window">
                    <div class="modal_close">
                        <img class="modal_close" src="/assets/media/image/cancel.png" alt="cancel">
                    </div>
                    <div class="modal_information">
                        <h3>%s</h3>
                        <p>%s</p>
                    </div>
                </div>
            </div>' , $value['alias'], $value['name_club_conference'], $value['modal']);
        }elseif($type == "video"){
            return sprintf(' 
            <div class="modal" id="for_%s">
                <div class="modal_window">
                    <div class="modal_close">
                        <img class="modal_close" src="/assets/media/image/cancel.png" alt="cancel">
                    </div>
                    <div class="modal_information">
                        <h3>%s</h3>
                        <iframe
                            src="%s"
                            frameBorder="0"
                            allow="clipboard-write; autoplay"
                            webkitAllowFullScreen
                            mozallowfullscreen
                            allowFullScreen
                        ></iframe>
                    </div>
                </div>
            </div>', $value['alias'], $value['name_video'], $value['link_video']);
        }
    }

    function fnGetPersonal($email){
        global $connect;

        $sql_id_user = "SELECT `id_user` FROM `user` WHERE `email` = '{$email}'";

        $id_user = $connect->query($sql_id_user)->fetch_assoc()['id_user'];

        $sql = "SELECT * FROM `user_team`INNER JOIN `team_studio` ON `user_team`.`id_team` = `team_studio`.`id_team_studio` WHERE `id_user` = {$id_user}";

        $result = $connect->query($sql);

        if($result->num_rows){
            $data = ' 
            <h3>Вы состоите в таких группах</h3>
                <div class="cards">';

            foreach ($result as $value) {
                $data .= sprintf('
                <div class="card">
                    <div class="card_content">
                        <img class="card_image" src="%s" alt="%s">
                        <div class="card_information">
                            <h4>%s</h4>
                            <p>%s</p>
                        </div>
                        <a class="link_img team_disconnect" data-id="%s">
                            Отписаться
                            <div class="link">
                                <img src="/assets/media/image/teams/link.png" alt="link">
                            </div>
                        </a>
                    </div>
                </div>', $value['path'], $value['name_team_studio'], $value['name_team_studio'], $value['information'], $value['id_team_studio']);
            }
            $data .= ' </div>';
        }else{
            $data = '
            <h3>Вы еще не вступили в группы</h3>
            <div class="text_link">
                <p>Еще нигде не участвуете? Присоединяйтесь прямо сейчас</p>
                <a href="/index.php#teams_studios" class="link_img">
                    <div class="link">
                        <img src="/assets/media/image/teams/link.png" alt="link">
                    </div>
                </a>
            </div>';
        }
        return $data;
    }
?>