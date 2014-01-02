<?php get_header(); ?>
    <div id="contentContainer">
        <h1>ARCHIVE</h1>
        <?php
        $args = array('post_type' => 'alumni');
        $loop = new WP_Query($args);

        while( $loop->have_posts()) : $loop->the_post();
        ?>
        <div class="personArchiveContainer">
            <a href="<?php the_permalink() ?>" >
                <img src="<?= the_field('headshot')?>"/>
            </a>
            <p><?= the_title()?></p>
        </div>
        <?php endwhile; ?>

    </div>
<?php get_footer(); ?>