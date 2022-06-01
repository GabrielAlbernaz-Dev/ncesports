<!DOCTYPE html>
<html class="dark" lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?=get_stylesheet_directory_uri();?>./assets/favicon.png" type="image/x-icon">
    <!-- My Styles -->
    <link rel="stylesheet" href="<?=get_stylesheet_directory_uri();?>./styles/global.css">
    <link rel="stylesheet" href="<?=get_stylesheet_directory_uri();?>./styles/header.css">
    <link rel="stylesheet" href="<?=get_stylesheet_directory_uri();?>./styles/footer.css">
    <link rel="stylesheet" href="<?=get_stylesheet_directory_uri();?>./styles/main.css">
    <link rel="stylesheet" href="<?=get_stylesheet_directory_uri();?>./styles/contact.css">
    <link rel="stylesheet" href="<?=get_stylesheet_directory_uri();?>./styles/about.css">
    <link rel="stylesheet" href="<?=get_stylesheet_directory_uri();?>./styles/tournaments.css">
    <link rel="stylesheet" href="<?=get_stylesheet_directory_uri();?>./styles/post.css">

    <!-- Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>NCesports</title>
    <?php  wp_head(); ?>
</head>
<body>
    <header id="main-header">
        <div class="top-bar">
            <div class="container">
                <a href="<?= get_site_url();?>" class="logo">
                    <h2>NC 
                        <span class="esports">
                            <span><i class="fa-solid fa-headset"></i></span>
                            <span>esports</span>
                        </span>
                    </h2>
                </a>
            <div class="right">
                <ul class="socials">
                        <li><a href="<?= get_post_meta(8,'linkedin',true);?>" target="_blank"><i class="fa-brands fa-linkedin"></i></a></li>
                        <li><a href="<?= get_post_meta(8,'github',true);?>" target="_blank"><i class="fa-brands fa-github-square"></i></a></li>
                        <li><a href="<?= get_post_meta(8,'twitter',true);?>" target="_blank"><i class="fa-brands fa-twitter-square"></i></a></li>
                        <li><a href="<?= get_post_meta(8,'portfolio',true);?>" target="_blank"><i class="fa-solid fa-square-parking"></i></a></li>
                    </ul>

                    <label class="switch toggle-button">
                        <input type="checkbox">
                        <span class="slider round"></span>
                    </label>
            </div>
            </div>
        </div>
        <nav class="header-nav">
            <div class="container">
                <?php 
                    wp_nav_menu(['menu' => 'Main','theme_location' => 'Main','container' => false,'menu_id' => false,'menu_class' => 'nav-menu']);
                ?>
                <div data-class="active" class="bars">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </nav>
    </header>