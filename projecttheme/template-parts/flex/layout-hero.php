<?php
$title = get_sub_field('title');
$image = get_sub_field('background_image');
?>
<div class="hero__media">
  <?php if ($image) : ?>
    <?php
    echo wp_get_attachment_image($image, 'full', false, [
      'class'         => 'hero__image',
      'alt'           => '',
      'aria-hidden'   => 'true',
      'loading'       => 'eager',
      'fetchpriority' => 'high',
      'decoding'      => 'async',
    ]);
    ?>
  <?php endif; ?>
</div>
<?php if ($title) : ?>
  <div class="hero__content">
    <h1 class="hero__title"><?php echo esc_html($title); ?></h1>
  </div>
<?php endif; ?>
