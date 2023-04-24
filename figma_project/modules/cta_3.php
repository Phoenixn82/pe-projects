<?php
    $cta = $sections[6];
    $cta_content = $cta["content"] ?? [];
    $cta_heading = $cta_content['heading'];
    $cta_subtitle = $cta_content['subtitle'];
    $cta_image = $cta_content['image'];
    $cta_actions = $cta_content['actions'];
    $cta_button = $cta_actions[1];
    $cta_input = $cta_actions[0];



?>
<section class="cta-l">
    <div class="cta-words">
      <h3><?= $cta_heading ?></h3>
      <p class="subtitle"><?= $cta_subtitle ?></p>
    </div>

    <div class="email-signup">
        <input type="text" name="email-signup" class="<?= $cta_input['class'] ?>" placeholder="<?= $cta_input['text'] ?>">

        <button class="<?=$cta_button['class']?>"><?=$cta_button['text']?></button>
    </div>
</section>

<picture>
    <img src="<?= $cta_image ?>">
</picture>
