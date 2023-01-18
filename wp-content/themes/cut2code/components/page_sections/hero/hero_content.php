<div class="wrapper wrapper__content">
    <p class="subheader">
        <?php echo $args['content']['subheader']; ?>
    </p>
    <<?php echo $args['header'] ?> class="header header__h1">
        <?php echo $args['content']['header']; ?>
    </<?php echo $args['header'] ?>>

    <?php if(array_key_exists('button', $args['content']) && !empty($args['content']['button'])): ?>
        <a 
        href="<?php echo $args['content']['button']['url']; ?>" 
        <?php echo array_key_exists('target', $args['content']['button']) && !empty($args['content']['button']['target']) ? "target='_blank' rel='noopener noreferrer'" : null; ?>
        class="button"
        >
            <?php echo $args['content']['button']['title']; ?>
        </a>
    <?php endif; ?>
</div>