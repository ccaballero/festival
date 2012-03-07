<?php
$session = new Zend_Session_Namespace();
$messages = $session->messages->getMessages();
?>

<?php if (!empty($messages)) { ?>
    <div id="messages">
    <?php foreach ($messages as $message) { ?>
        <span class="message"><?php echo $message ?></span>
    <?php } ?>
    </div>
    <?php $session->messages->clean(); ?>
<?php } ?>
