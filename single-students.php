<?php get_header(); ?>
    <div id="contentContainer" style="opacity:0">
        <?php while ( have_posts() ) : the_post(); ?>
            <img id="single_headshot" src="<?= the_field('headshot')?>"/>
            <h1 id="personTitle"><?= the_title() ?></h1>
            <p id="story"><?= the_field('story') ?></p>
        <?php endwhile ?>

    </div>
<?php get_footer(); ?>