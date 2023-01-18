<div class="wrapper">
  <div class="header">
    <?php get_template_part( 'components/small_dots'); ?>
    <h3><?php echo $args['header'] ?></h3>
  </div>
  <ul>
    <?php foreach($args['links'] as $link): ?>
        <li>
            <a 
                href="<?php echo $link['link']['url']; ?>"
                <?php echo array_key_exists('target', $link['link']) && !empty($link['link']['target']) ? "target='_blank' rel='noopener noreferrer'" : null; ?>

            >
                <?php echo $link['link']['title']; ?>
            </a>
        </li>
    <?php endforeach; ?>
  </ul>
</div>