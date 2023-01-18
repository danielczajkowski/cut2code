<?php 
    $post = get_post($args);
    setup_postdata( $post );
?>

<div class="tile tile__post">
    <a href="<?php the_permalink(); ?>">
        <div class="wrapper wrapper__thumbnail<?php get_browser_name($_SERVER['HTTP_USER_AGENT']) === "Safari" ? " safari-image" : null; ?>">
            <?php the_post_thumbnail(); ?>
        </div>
        <div class="wrapper wrapper__content">
            <h2 class='header header__h3'>
                <?php the_title(); ?>
            </h2>
            <?php the_excerpt(); ?>
        </div>
    </a>
</div>

<?php wp_reset_postdata(); ?>