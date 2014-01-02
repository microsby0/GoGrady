<?php get_header(); ?>
    <div id="contentContainer">
        <img id="peabody_banner" src="/wp-content/themes/grady_theme/img/peabody_banner.png"/>
        <div id="peabody_awards">
            <?php
            $args = array('post_type' => 'peabody_awards');
            $loop = new WP_Query($args);

            while( $loop->have_posts()) : $loop->the_post();
            ?>
            <div id="award_container">
                <a href="<?php the_permalink() ?>" >
                    <img class="award_photo" src="<?= the_field('photo')?>"/>
                </a>
                <h2><?= the_title() ?></h2>
            </div>
            <?php endwhile; ?>
        </div>
    </div>
<?php get_footer(); ?>