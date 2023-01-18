<section class="container container__tripple">
    <?php foreach($args as $tile): ?>
        <?php get_template_part( 'components/page_sections/tripple_content/tripple_content_tile', '', $tile); ?>
    <?php endforeach; ?>
</section>
