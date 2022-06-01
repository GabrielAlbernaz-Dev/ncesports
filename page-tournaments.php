<?php 
    //Template Name: Tournaments
?>
<?php get_header(); ?>

<section id="tournaments">
    <ul class="tabs">
        <li class="tab active" data-tab>League of Legends</li>
        <li class="tab" data-tab>Valorant</li>
    </ul>

    <div id="lol" class="tab-content" data-tab-content>
        <?php 
            //Query Category Posts
            $args = [
                'post_type' => 'loltournaments',
                'order' => 'ASC',
            ];

            $the_query = new WP_Query($args);
            ?>
        <?php include (TEMPLATEPATH . '/inc/tournaments.php'); ?>
    </div>

    <div id="lol" class="tab-content" data-tab-content>
        <?php 
            //Query Category Posts
            $args = [
                'post_type' => 'valoranttournaments',
                'order' => 'ASC',
            ];

            $the_query = new WP_Query($args);
            ?>
        <?php include (TEMPLATEPATH . '/inc/tournaments.php'); ?>
    </div>
</section>

<?php get_footer(); ?>