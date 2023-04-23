<?php 

 $clients = $sections[4];
 $clients_content = $clients['content'];
?>

<div class="c-module">
    <h3><?= $clients_content['heading'] ?></h3>
    <p class="subtitle"><?= $clients_content['subtitle'] ?></p>
</div>
<div class="client-feedback-module">
    <?php foreach ($clients_content['feedback'] as $feedback) { ?>
        <div class="client-feedback-component">
            <img class='stars' src="<?= $feedback['stars'] ?>">
            <p class="small-quote"><?= $feedback['quote'] ?></p>
            <img class='person' src="<?= $feedback['person'] ?>">
            <p class="small-client-name"><?= $feedback['name'] ?></p>
        </div>
    <?php } ?>
</div>