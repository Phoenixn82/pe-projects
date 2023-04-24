<?php
    $clients = $sections[4];
    $clients_content = $clients["content"] ?? [];
    $clients_heading = $clients_content['heading'];
    $clients_subtitle = $clients_content['subtitle'];
    $clients_feedback = $clients_content['feedback'];
    $clients_feedback_quote = $clients_feedback['quote'];
    $clients_feedback_client_name = $clients_feedback['client_name'];
    $clients_feedback_client_role = $clients_feedback['client_role'];
    $clients_image = $clients_content['image'];
?>

<div class="c-module">
  <h3><?= $clients_heading ?></h3>
  <p class="subtitle"><?= $clients_subtitle ?></p>
</div>

<section class="clients-testimonials">

<picture>
    <img src="<?= $clients_image ?>">
</picture>

<div class="client-r">
<div class="client-feedback-module">
    <p class="big-quote"><?= $clients_feedback_quote ?></p>

    <div class="client-feedback">
        <p class="small-client-name"><?= $clients_feedback_client_name ?></p>
        <p class="client-role"><?= $clients_feedback_client_role ?></p>
    </div>
</div>
</div>
</section>