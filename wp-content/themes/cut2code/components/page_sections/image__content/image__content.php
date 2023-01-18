<section class="container container__half-image">
    <div class="wrapper wrapper__image">
        <img src="<?php echo $args['image']['sizes']['image-content-element']; ?>" alt="<?php echo $args['image']['alt']; ?>">
    </div>

    
    <?php 
    $data = [
        'header' => "h2",
        'content' => $args['content_wrapper']
    ];
    get_template_part( 'components/page_sections/hero/hero_content', '', $data); 
    
    ?>
</section>