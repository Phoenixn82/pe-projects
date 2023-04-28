<?php
    $center_content = $sections[2];
    $cc_content = $center_content["content"] ?? [];
    $cc_icon = $cc_content['icon'];
    $cc_top_subtitle = $cc_content['top_subtitle'];
    $cc_heading = $cc_content['heading'];
    $cc_bottom_subtitle = $cc_content['bottom_subtitle'];
    $cc_actions = $cc_content['actions'];
    $cc_link_text = $cc_actions[0]['text'];
    $cc_link_class = $cc_actions[0]['class'];
    $cc_link_url = $cc_actions[0]['url'];
?>

<picture class="cc-icon">
    <img class="cloud-img" src="<?=$cc_icon?>">
</picture>
<div class="cc-title">
    <p class="subtitle"><?=$cc_top_subtitle?></p>
    <h2><?=$cc_heading?></h2>
    <p class="subtitle"><?=$cc_bottom_subtitle?></p>
</div>

<p class="<?=$cc_link_class?>"><?=$cc_link_text?> > </p>