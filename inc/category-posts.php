<?php if( $the_query->have_posts() ) : while( $the_query->have_posts() ) : $the_query->the_post(); ?>
        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"class="category-posts-card">
            <div class="img">
                <?php the_post_thumbnail(); ?>
            </div>
            <div class="content">
                <h2 class="title"><?php the_title();?></h2>
                <p class="text"><?php the_excerpt();?></p>
                <span class="date"><?= get_the_date();?></span>
            </div>
        </a>
<?php endwhile; endif ?>
<?php wp_reset_query(); wp_reset_postdata();?>

