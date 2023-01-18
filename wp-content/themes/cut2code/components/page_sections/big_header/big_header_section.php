<section class="container container__header">
    <?php if(array_key_exists('subheader', $args) && !empty($args['subheader'])): ?>
        <p class="subheader">
            <?php echo $args['subheader']; ?>
        </p>
    <?php endif; ?>
    <h2 class='header header__h1'>
        <?php echo $args['header']; ?>
    </h2>
</section>