<?php get_header(); ?>
<style>
    a {
      color: black;
      font-family: Helvetica;
      letter-spacing: 1.4px;
      text-decoration: none; }
      a:active {
        color: #ae070f; }
      a:hover {
        text-decoration: underline;
        color: #ae070f; }
    ul{margin:0;}
</style>
    <div id="carousel" class="carousel slide">
        <div class="carousel-inner">
            <?php
            $args = array('post_type' => 'historic_events', 'posts_per_page' => -1);
            $loop = new WP_Query($args);
            $i=true;
            while( $loop->have_posts()) : $loop->the_post();
            if($i){
            ?>
            <div class= "item active">
            <?php $i=false; } else{ ?>
            <div class="item">
            <?php }?>
                <img src="<?= the_field('photo')?>">
                <div class="carousel-caption">
                    <h4><?= the_title() ?></h4>
                    <p><?= the_field('description')?></p>
                </div>
            </div>
            <?php endwhile; ?>
        </div>
        <a class="left carousel-control" href="#carousel" data-slide="prev">&lsaquo;</a>
        <a class="right carousel-control" href="#carousel" data-slide="next">&rsaquo;</a>
    </div>
<?php get_footer(); ?>