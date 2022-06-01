<style>
    .banner{
        width: 100%;
        min-height: 35rem;
        position: relative;
        background-image: url(<?= get_post_meta(get_the_id(),'banner',true);?>);
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
    }

    .banner .filter{
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        backdrop-filter:brightness(60%);
    }

    .banner .current {
        position: absolute;
        bottom: 0;
        left: 0;
        padding:2rem;
        background: var(--primary);
        max-width: 20rem;
        border-radius: 4px;
        box-shadow: rgba(0, 0, 0, 0.4) 0px 2px 4px, rgba(0, 0, 0, 0.3) 0px 7px 13px -3px, rgba(0, 0, 0, 0.2) 0px -3px 0px inset;
    }

    .banner .current h2 {
        color: var(--light);
        text-shadow: 1px 2px 3px rgba(0,0,0,0.3);
    }

</style>

<section class="banner">
    <div class="filter">
        <div class="current">
            <h2><?php the_title(); ?></h2>
        </div>
    </div>
</section>