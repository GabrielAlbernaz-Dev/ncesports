<?php get_header(); ?>
    <section id="post-content">
        <div class="container">
            <h1 class="post-title"><?php the_title(); ?></h1>
            <h4 class="post-date"><span>Publicado em </span><?= get_the_date('l j F, Y');?></h4>
            <div class="post-description"><?php the_content(); ?></div>
        </div>
    </section>
<?php get_footer(); ?>