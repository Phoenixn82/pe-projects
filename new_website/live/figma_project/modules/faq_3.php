<?php 
    $faq = $sections[5];
    $faq_content = $faq["content"] ?? [];
    $faq_heading = $faq_content['heading'] ?? '' ;
    $faq_subtitle = $faq_content['subtitle'] ?? '' ;
    $faq_questions = $faq_content['questions'] ?? [];

?>

<div class="faq-title">
    <h3><?=$faq_heading?></h3>
    <p class="subtitle"><?= $faq_subtitle ?></p>
</div>

<div class="faq-menu">
    <?php foreach ($faq_questions as $question): ?>
        <button type="button" class="collapsible"><?= $question['question']?></button>
        <div class="content">
            <p><?= $question['answer'] ?? '' ?></p>
        </div>
    <?php endforeach; ?>
</div>

<?php include("js/menu_js.php"); ?> 