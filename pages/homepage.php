<?php
/**
 * Template Name: Homepage
 *
 * @package iwn_website
 */

get_header();
?>

<div class="page-template-homepage">
    <?=
    get_template_part('pages/homepage/hero');
    get_template_part('pages/homepage/our_mission');
    get_template_part('pages/homepage/pets_slider');
    get_template_part('pages/homepage/stories');
    get_template_part('pages/homepage/faqs');
    ?>
</div>

<?php
get_footer();
