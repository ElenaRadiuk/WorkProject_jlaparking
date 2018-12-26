<?php
/**
 * The main template file
 */

get_header(); ?>


<div class="wrapper">

    <section class="main">
        <?php $the_query = new WP_Query('p=8'); ?>
        <?php while ($the_query->have_posts()): $the_query->the_post(); ?>
        <?php the_post_thumbnail('full', array('class' => 'img-responsive')); ?>

        <div class="main-text">
            <h1><?php the_title(); ?></h1>
            <div class="hidden-formob"><?php the_content(); ?></div>

            <?php $text_btn = get_post_meta($post->ID, 'text_btn', true); ?>

            <button><a href="#toContactUs"><?php echo $text_btn; ?></a></button>
        </div>

        <div class="main-text-mob">
            <div><?php the_content(); ?></div>
        </div>

    </section>
        <?php endwhile;
        wp_reset_query();?>


    <section class="about-us">

            <?php $the_query = new WP_Query('cat=3&order=DESC'); ?>
            <?php while ($the_query->have_posts()): $the_query->the_post(); ?>
        <div class="about-us-item">
            <?php the_post_thumbnail('full', array('class' => 'img-responsive')); ?>
                <div class="item-wrapper">
                    <h3><?php the_title(); ?></h3>
                    <div class="item-text"><?php the_content(); ?></div>
                </div>
        </div>
            <?php endwhile; wp_reset_query();?>
    </section>


    <section class="advantages">

        <?php $the_query = new WP_Query('cat=4&order=DESC'); ?>
        <?php while ($the_query->have_posts()): $the_query->the_post(); ?>
            <div class="advantages-item">
                <?php the_post_thumbnail('full', array('class' => 'img-responsive')); ?>
                <div class="item-wrapper">
                    <h3><?php the_title(); ?></h3>
                    <div class="item-text"><?php the_content(); ?></div>
                </div>
            </div>
        <?php endwhile; wp_reset_query();?>
    </section>


    <section class="return-section">

        <?php $the_query = new WP_Query('p=28'); ?>
        <?php while ($the_query->have_posts()): $the_query->the_post(); ?>
                <div class="item-wrapper">
                    <h3><?php the_title(); ?></h3>
                    <div class="item-text"><?php the_content(); ?></div>
                </div>
        <?php endwhile; wp_reset_query();?>
    </section>

    <section class="location-section">

        <?php $the_query = new WP_Query('p=30'); ?>
        <?php while ($the_query->have_posts()): $the_query->the_post(); ?>
            <div class="item-wrapper">
                <h3 id="toLocation"><?php the_title(); ?></h3>
                <div class="item-text"><?php the_content(); ?></div>
            </div>
        <?php endwhile; wp_reset_query();?>
    </section>


    <section class="map-section">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9527.718044918012!2d-2.852959712519556!3d53.34451799060016!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487ae0269a091f3d%3A0xe5ee23903d739fd9!2zMSBXb29kZW5kIEF2ZSwgU3Bla2UsIExpdmVycG9vbCBMMjQgOU5CLCDQktC10LvQuNC60L7QsdGA0LjRgtCw0L3QuNGP!5e0!3m2!1sru!2sua!4v1541712082794" width="100%" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
    </section>

    <section class="contact-us">
        <div class="contactus-wrapper">
        <?php $the_query = new WP_Query('p=35'); ?>
        <?php while ($the_query->have_posts()): $the_query->the_post(); ?>
            <div class="contactform-item">
                <h3 id="toContactUs"><?php the_title(); ?></h3>
                <div class="contactform-text"><?php the_content(); ?></div>
            </div>
        <?php endwhile; wp_reset_query();?>

        <?php $the_query = new WP_Query('p=37'); ?>
        <?php while ($the_query->have_posts()): $the_query->the_post(); ?>
            <div class="contacts-item">
                <div class="ci-box">
                    <h4><?php echo get_post_meta($post->ID, 'title_email', true); ?></h4>
                    <div>
                        <?php echo get_post_meta($post->ID, 'email', true); ?>
                    </div>
                </div>

                <div class="ci-box">
                    <h4><?php echo get_post_meta($post->ID, 'title_phone', true); ?></h4>
                    <div>
                        <?php echo get_post_meta($post->ID, 'phone', true); ?>
                    </div>
                </div>

                <div class="ci-box">
                    <h4><?php echo get_post_meta($post->ID, 'title_address', true); ?></h4>
                    <div>
                        <?php echo get_post_meta($post->ID, 'Address', true); ?>
                    </div>
                </div>
            </div>
        <?php endwhile; wp_reset_query();?>
        </div>

    </section>
</div>

<?php get_footer(); ?>
