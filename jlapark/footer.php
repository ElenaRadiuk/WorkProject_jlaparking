<footer>
    <div class="footer-wrapper">
    <?php $the_query = new WP_Query('p=41'); ?>
    <?php while ($the_query->have_posts()): $the_query->the_post(); ?>


                <div class="address-item">
                    <div class="copyright-text"><?php the_content(); ?></div>
                    <address>
                    <span><?php echo get_post_meta($post->ID, 'Address', true); ?></span>
                    <span style="color:white;"><?php echo get_post_meta($post->ID, 'phone', true); ?></span>
                    <span><?php echo get_post_meta($post->ID, 'email', true); ?></span>
                    </address>
                </div>

                <div class="imgpark-item">
                    <img src="<?php bloginfo('template_url'); ?>/image/parkmark.jpg" alt="">
                </div>

    <?php endwhile; wp_reset_query();?>
    </div>
</footer>


<?php wp_footer(); ?>

</body>

</html>