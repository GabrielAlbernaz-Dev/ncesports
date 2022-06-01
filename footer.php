<footer id="footer">
    <div class="container">

        <section class="brand">
            <a href="<?= get_site_url();?>" class="logo">
                <h2>NC 
                    <span class="esports">
                        <span><i class="fa-solid fa-headset"></i></span>
                        <span>esports</span>
                    </span>
                </h2>
            </a>

            <p><?= get_post_meta(8,'footer_about',true);?><p>
        </section>

        <section class="footer-menu">
            <h2 class="menu-title">Menu</h2>
            <nav class="footer-nav">
                <?php 
                    wp_nav_menu(['menu' => 'Footer Menu','theme_location' => 'Footer Menu','container' => false,'menu_id' => false,'menu_class' => 'nav-menu']);
                ?>
            </nav>
        </section>

        <section class="footer-menu">
            <h2 class="menu-title">Jogos</h2>
            <nav class="footer-nav">
                <?php 
                    wp_nav_menu(['menu' => 'Jogos','theme_location' => 'Jogos','container' => false,'menu_id' => false,'menu_class' => 'nav-menu']);
                ?>
            </nav>
        </section>

        <section class="footer-menu">
        <h2 class="menu-title">Socials</h2>
            <nav class="footer-nav">
                <?php 
                    wp_nav_menu(['menu' => 'Socials','theme_location' => 'Socials','container' => false,'menu_id' => false,'menu_class' => 'nav-menu']);
                ?>
            </nav>
        </section>

    </div>
    <section class="copy">
        <h2>&#169;<?php echo date('Y');?><span>Todos os direitos reservados</span></h2>
    </section>
</footer>
<script type="module" src="<?= get_template_directory_uri() .'/js/app.js'?>"></script>
</body>
</html>