<section class="header" style="background-image: url('<?php the_post_thumbnail_url(); ?>')">
    <div class="header__body">
        <h1 class="header__h1">
            <span class="header__h1__primary"><?php the_field('header-title-primary'); ?></span>
            <?php the_field('header-title'); ?>
        </h1>
        <p class="header__p">
        <?php the_field('header-paragraph'); ?>
        </p>
        <?php $link = get_field('header-button-url'); ?>
        <a href="<?php esc_url($link) ?>" class="button button--transparent">
        <?php the_field('header-button-name') ?>
        </a>
    </div>
</section>