<?php get_header(); ?>
    <div id="contentContainer">
        <?php
        $args = array('post_type' => 'students', 'posts_per_page' => 3);
        $loop = new WP_Query($args);

        while( $loop->have_posts()) : $loop->the_post();
        ?>
        <div class="personContainer">
            <a href="<?php the_permalink() ?>" >
                <img src="<?= the_field('thumbnail_headshot')?>"/>
            </a>
            <p><?= the_field('blurb')?> ~ <span style="font-style:oblique"><?= the_title() ?></span></p>
        </div>
        <?php endwhile; ?>
    </div>
    <?php get_footer(); ?>