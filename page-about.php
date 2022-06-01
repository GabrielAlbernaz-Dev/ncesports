<?php 
    //Template Name: Sobre
?>
<?php get_header(); ?>
<style>
    #about {
        background: url(<?= get_post_meta(21,'about_bg',true);?>);
        background-repeat: no-repeat;
        background-size: cover;
        position: relative;
    }
</style>

<section id="about">
    <div class="wrapper">
        <h2 class="about-title">Um pouco sobre a <a href="<?= get_site_url();?>" class="logo">
                <h2>NC
                    <span class="esports">
                        <span><i class="fa-solid fa-headset"></i></span>
                        <span>esports</span>
                    </span>
                </h2>
            </a> </h2>

        <p class="about-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
        <a href="<?= get_page_link()?>/home" class="btn">Veja nossas notícias</a>
    </div>
</section>

<?php get_footer(); ?>

