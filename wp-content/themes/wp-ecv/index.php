<?php get_header();

if ( have_posts() ) {
    while ( have_posts() ) {
        the_post();
        get_template_part( 'template/content/content');
    }

} else {
    get_template_part( 'template/content/content-none' );
}

get_footer();
