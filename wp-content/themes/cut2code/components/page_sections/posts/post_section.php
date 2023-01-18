<section>
    <?php
    
    $posts_container_id = uniqid('posts_');
    
    $wp_query = new WP_Query(array(
        'post_type' => 'post',
        'posts_per_page' => 4,
        'paged' => (get_query_var('paged')) ? get_query_var('paged') : 1
    ));
    
    $the_query = new WP_Query($wp_query);?>
    <?php if ($the_query->have_posts()): ?>
        <div class="container container__all_posts" posts-container="<?php echo $posts_container_id; ?>">
            <?php while ($the_query->have_posts()): $the_query->the_post();?>
                <?php
                    get_template_part( 'components/page_sections/posts/posts_tile', '', get_post());
                ?>
            <?php endwhile; ?>
        </div>
    <?php endif; ?>
    <?php wp_reset_query(); ?>
    
    <?php
    $data = [
        'post_container_id' => $posts_container_id,
        'content' => $args,
    ];
    get_template_part( 'components/page_sections/posts/post_read_more', '', $data);
    
    ?>
</section>