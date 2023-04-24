<?php
  $clients = $sections[4];
  $clients_content = $clients["content"] ?? [];
  $clients_heading = $clients_content['heading'] ?? '';
  $clients_subtitle = $clients_content['subtitle'] ?? '';
  $client_feedback = $clients_content['client_feedback'] ?? [];
?>

<div class="c-module">
  <h3><?= $clients_heading ?></h3>
  <p class="subtitle"><?= $clients_subtitle ?></p>
</div>

<div class="client-feedback-module">
  <?php foreach ($client_feedback as $feedback) { ?>
    <div class="client-feedback-component">
      <p class="big-quote"><?= $feedback['quote'] ?></p>
      <div class="person-parent">
        <img class='person-pic' src="<?= $feedback['image'] ?>">
        <div class="person">
          <p class="big-client-name"><?= $feedback['name'] ?></p>
          <p class="big-client-role"><?= $feedback['role'] ?></p>
        </div>
      </div>
    </div>
  <?php } ?>
</div>
