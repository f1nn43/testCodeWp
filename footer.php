<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package testCodeWp
 */

?>
<?php wp_footer(); ?>
<script>
    var swiper = new Swiper(".mySwiper", {
        spaceBetween: 18,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        breakpoints: {
            0: {
                slidesPerView: 1,
            },
            360: {
                slidesPerView: 'auto'
            }
        }
    });
    swiper.setTranslate(0)
    
  </script>
</body>
</html>
