<?php
    $center_content = $sections[2];
    $cc_content = $center_content["content"] ?? [];
    $cc_top_subtitle = $cc_content['top_subtitle'];
    $cc_heading = $cc_content['heading'];
    $cc_actions = $cc_content['actions'];
    $cc_link_text = $cc_actions[0]['text'];
    $cc_link_class = $cc_actions[0]['class'];
    $cc_link_url = $cc_actions[0]['url'];
    $cc_info = $cc_content['info'];
?>

<div class="cc-title">
    <p class="subtitle"><?=$cc_top_subtitle?></p>
    <h2><?=$cc_heading?></h2>
</div>


    <ul class="content-container">
        <?php foreach ($cc_info as $info) { ?>
        <li class="content-child" >
            <h4><?= $info['title'] ?></h4>
            <p class="cc-body"><?= $info['body'] ?></p>
        </li>
        <?php } ?>
    </ul>


<p class="<?=$cc_link_class?>"><?=$cc_link_text?> > </p>
