<footer class="container-fluid ">
    <div class="row">
        <div class="leftInfo col-3">
            <img src=" <?php echo get_field('website_logo','options'); ?>" alt="entwinedLogo">
            <p>AUS <?php  echo get_field('support_number_au','options'); ?></p>
            <p>NZ <?php  echo get_field('support_number_nz','options');?></p>
            <p>CAN <?php echo get_field('support_number_can','options'); ?></p>
            <p style="font-size:0.7em; margin-top:10px">ABN 71 167 850 731<br>Entwined Signage PTY LTD trading as
                Entwined, 2015©</p>


        </div>
        <div class="footerMenu col-3">
            <?php wp_nav_menu( array( 'theme_location' => 'footer_menu' ) ); ?>
        </div>
        <div class="rightCon col-3">
            <p>Follow Us:</p>
            <a href="#"><img src="<?php bloginfo('template_directory'); ?>/imgs/icons/facebook-icon-static_00.svg" alt=""></a>
            <a href="#"><img src="<?php bloginfo('template_directory'); ?>/imgs/icons/linkedin-icon-static_00.svg" alt=""></a>
            <a href="#"><img src="<?php bloginfo('template_directory'); ?>/imgs/icons/twitter-icon-static_00.svg" alt=""></a>
            <a href="#"><img src="<?php bloginfo('template_directory'); ?>/imgs/icons/youtube-icon-static_00.svg" alt=""></a>
            <p class="phoneBlock"> <?php  echo get_field('support_number_au','options'); ?> </p>
           
        </div>
    </div>
</footer>

</body>

</html>