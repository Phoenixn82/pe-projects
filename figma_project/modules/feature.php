<?php 
  $feature = $sections[3];
  $feature_content = $feature["content"];
  $feature_heading = $feature_content["heading"];
  $feature_subtitle = $feature_content["subtitle"];
  $feature_picture = $feature_content["picture"];
  $features = $feature_content["features"];
?>


  <div class="feature-section-l">
    <h3><?= $feature_heading ?></h3>
    <p class="subtitle"><?= $feature_subtitle ?></p>
    <picture class="feature-pic">
      <img src="<?= $feature_picture ?>">
    </picture>
  </div>

  <div class="feature-section-r">
    <?php foreach ($features as $feature_item): ?>
      <div class="feature-list">
        <img src="<?= $feature_item['icon'] ?>">
        <div class="f-module">
          <h4><?= $feature_item['heading'] ?></h4>
          <p class="feature-body"><?= $feature_item['subtitle'] ?></p>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
