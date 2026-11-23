<?php
$title         = get_sub_field('title');
$ids           = get_sub_field('images') ?: [];
$show_captions = (bool) get_sub_field('show_captions');
?>
<?php if (!empty($ids)): ?>
<div class="galerie">
  <?php if ($title): ?>
    <h2 class="galerie__title"><?php echo esc_html($title); ?></h2>
  <?php endif; ?>
  <div class="galerie__grid">
  <?php foreach ($ids as $img_id): 
    $caption = wp_get_attachment_caption($img_id);
  ?>
  <figure class="galerie__item">
    <div class="galerie__media">
      <?php
      echo wp_get_attachment_image(
        $img_id,
        'large',
        false,
        [
          'class'    => 'galerie__image',
          'loading'  => 'lazy',
          'decoding' => 'async',
        ]
      );
      ?>
    </div>
    <?php if ($show_captions && $caption): ?>
      <figcaption class="galerie__caption"><?php echo esc_html($caption); ?></figcaption>
    <?php endif; ?>
  </figure>
  <?php endforeach; ?>
  </div>
</div>
<?php endif; ?>
