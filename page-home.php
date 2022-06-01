<?php 
//Template Name: Home
?>

<?php get_header(); ?>

<?php 
//Query
$args = [
    'post_type' => ['valorant','lol'],
    'posts_per_page' => 3,
    'order' => 'ASC',
];

$the_query = new WP_Query($args);
?>


<main>
    <?php include (TEMPLATEPATH . '/inc/blog-banner.php'); ?>

    <h1 class="main-title">Noticias</h1>

    <div class="container">
        <section class="main-content">
            <?php include (TEMPLATEPATH . '/inc/main-content.php'); ?>
        </section>

        <div class="grid-2 my-8">
            <section class="category-posts">
                <?php 
                //Query Category Posts
                $args = [
                    'post_type' => ['lol','valorant'],
                    'posts_per_page' => 4,
                    'order' => 'DESC',
                ];

                $the_query = new WP_Query($args);
                ?>
                <?php include (TEMPLATEPATH . '/inc/category-posts.php'); ?>
            </section>
            
            <aside class="sidebar-tournaments">
                <h2 class="title">Principais torneios</h2>
                <?php 
                //Query Category Posts
                $args = [
                    'post_type' => ['loltournaments','valoranttournaments'],
                    'order' => 'ASC',
                ];

                $the_query = new WP_Query($args);
                ?>
                
                <?php include (TEMPLATEPATH . '/inc/tournaments.php'); ?>

                <a href="<?= get_page_link()?>/torneios" class="btn">Veja todos</a>
            </aside>

        </div>
    </div>
</main>

<?php get_footer(); ?>

