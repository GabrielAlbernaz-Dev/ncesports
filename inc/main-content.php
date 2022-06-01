<div class="blog-grid">
    <?php if( $the_query->have_posts() ) : while( $the_query->have_posts() ) : $the_query->the_post(); ?>
            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"class="blog-card">
                <div class="img">
                    <?php the_post_thumbnail(); ?>
                </div>
                <div class="content">
                    <h2 class="title"><?php the_title(); ?></h2>
                </div>
            </a>
    <?php endwhile; endif ?>
    <?php wp_reset_query(); wp_reset_postdata();?>
</div>  