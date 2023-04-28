<?php 
  $feature = $sections[3];
  $feature_content = $feature["content"] ?? [];
  $feature_top_subtitle = $feature_content['top_subtitle'] ?? '';
  $feature_bottom_subtitle = $feature_content['bottom_subtitle'] ?? '';
  $feature_heading = $feature_content['heading'] ?? '';
  $features = $feature_content['features'] ?? [];
?>
<div class="feature-title">
<p class="subtitle"><?= $feature_top_subtitle ?></p>
<h2><?= $feature_heading ?></h2>
<p class="subtitle"><?= $feature_bottom_subtitle ?></p>

</div>

<ul class="feature-section">
  <?php foreach ($features as $feature) { ?>
    <li class="feature-list">
      <img src="<?= $feature['icon'] ?>">
      <h4><?= $feature['title'] ?></h4>
      <p class="feature-body"><?= $feature['body'] ?></p>
    </li>
  <?php } ?>
</ul>
