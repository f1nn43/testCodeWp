<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package testCodeWp
 */

get_header();
?>
<section class="crumbs">
        <div class="crumbs__inner">
            <div class="crumbs__content">
                <span class="crumbs__text"><a href="#">Главная</a> / <a href="#">Безопасность бизнеса</a> / <a href="#" class="crumbs__active">Обеспечение порядка в местах проведения массовых мероприятий</a></span>
                <h1 class="crumbs__head">Обеспечение порядка в местах проведения массовых мероприятий</h1>
            </div>
            <img class="crumbs__img" src="http://testcodewp:336/wp-content/uploads/2024/10/crumbs1.png" alt="crumbs1">
        </div>
    </section>
    <section class="section1">
        <div class="section1__inner">
            <div class="section1__item">
                <h3>Риски</h3>
                <p>В современный период времени проведение больших массовых мероприятий имеет особенно высокий риск опасности. Творческие встречи, концерты, праздники, спортивные соревнования, все это требует внимательного и тщательного контроля.</p>
            </div>
            <div class="section1__item">
                <h3>Охрана</h3>
                <p>В случае обнаружения какой-либо опасности, каждому участнику встречи должна быть оказана незамедлительная помощь со стороны охранных структур. Равным образом и для предотвращения внешних угроз различного характера организация охраны массовых мероприятий является обязательным условием.</p>
            </div>
        </div>
    </section>
    <section class="section2">
        <div class="section2__inner">
            <h2 class="section2__head"><?php echo get_field('title')?></h2>
            <?php 
            foreach (get_field('clients') as $client){
                echo '<pre>';
                print_r($client);
                echo '</pre>';
            }?>
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide"><img src="http://testcodewp:336/wp-content/uploads/2024/10/tele2__logo.svg" alt="tele2__logo"></div>
                    <div class="swiper-slide"><img src="http://testcodewp:336/wp-content/uploads/2024/10/continent__logo.svg" alt="continent__logo"></div>
                    <div class="swiper-slide"><img src="http://testcodewp:336/wp-content/uploads/2024/10/stk__logo.svg" alt="stk__logo"></div>
                    <div class="swiper-slide"><img src="http://testcodewp:336/wp-content/uploads/2024/10/gpntb__logo.svg" alt="gpntb__logo"></div>
                    <div class="swiper-slide"><img src="http://testcodewp:336/wp-content/uploads/2024/10/tele2__logo.svg" alt="tele2__logo"></div>
                    <div class="swiper-slide"><img src="http://testcodewp:336/wp-content/uploads/2024/10/continent__logo.svg" alt="continent__logo"></div>
                    <div class="swiper-slide"><img src="http://testcodewp:336/wp-content/uploads/2024/10/stk__logo.svg" alt="stk__logo"></div>
                    <div class="swiper-slide"><img src="http://testcodewp:336/wp-content/uploads/2024/10/gpntb__logo.svg" alt="gpntb__logo"></div>
                </div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </div>
    </section>
    <section class="contacts">
        <div class="contacts__inner">
            <div class="contacts__content">
                <h3 class="contacts__head">Подпишитесь на&nbsp;рассылку</h3>
                <p class="contacts__dephead">Чтобы узнавать о новых предложениях</p>
                <form class="contacts__form">
                    <input type="email" placeholder="Email">
                    <button>Отправить</button>
                </form>
            </div>
            <img class="contacts__img" src="http://testcodewp:336/wp-content/uploads/2024/10/contacts1.png" alt="contacts1">
        </div>
    </section>
<?php
get_footer();
