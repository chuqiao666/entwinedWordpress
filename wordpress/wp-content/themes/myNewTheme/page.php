<?php 
wp_head();
get_template_part('includes/page/wp-header'); 

// echo "this is page php";

if(have_rows("block")):
    while (have_rows('block')): the_row();
    echo get_template_part('includes/content-blocks/'.get_row_layout());
endwhile;
endif;



// echo get_field('website_address','options'); 
get_template_part('includes/page/wp-footer'); 

 wp_footer();
?>