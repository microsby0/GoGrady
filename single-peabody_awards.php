<?php get_header(); ?>
    <div id="contentContainer"  style="opacity:0">
        <iframe id="single-peadbody_video" src="<?= the_field('video') ?>" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
        <?php while ( have_posts() ) : the_post(); ?>
            <div id="single-award_container">
                <h2><?= the_title() ?></h1>
                <p><?= the_field('description') ?> For more information visit the <a href="<?= the_field('peabody_url') ?>"> Peabody Site</a>.</p>
                <p id="peabody_disclaimer">DISCLAIMER: The clips shown on this website and mobile phone app are pursuant to the non-profit mission of the Peabody Awards Collection archive, in full compliance with the Copyright Act of 1976 (17 U.S.C. § 108, et.al.). No unauthorized reproduction is allowed. For research purposes only.</p>
            </div>
        <?php endwhile ?>

    </div>
<?php get_footer(); ?>