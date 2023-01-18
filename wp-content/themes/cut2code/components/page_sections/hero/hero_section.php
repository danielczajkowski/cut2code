<section class="container container__hero">
    <?php 
        $data = [
            'header' => "h1",
            'content' => $args['content_wrapper']
        ];
    ?>
    <?php get_template_part( 'components/page_sections/hero/hero_content', '', $data); ?>

    <div class="wrapper wrapper__gallery">
        <?php foreach($args['gallery'] as $hero_image): ?>
            <img width="<?php echo $hero_image['width']; ?>" heigth="<?php echo $hero_image['height']; ?>" src="<?php echo $hero_image['url']; ?>" alt="<?php echo $hero_image['alt']; ?>">
        <?php endforeach; ?>

        <span class="ornament"></span>
    </div>
</section>
