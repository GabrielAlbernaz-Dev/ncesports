<ul class="tournaments">
    <?php if( $the_query->have_posts() ) : while( $the_query->have_posts() ) : $the_query->the_post(); ?>
            <li>
                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="tournament">
                    <?php the_post_thumbnail(); ?>
                    <h3><?php the_title(); ?></h3>
                </a>
            </li>
    <?php endwhile; endif ?>
</ul>