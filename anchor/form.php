<?php defined('C5_EXECUTE') or die("Access Denied."); ?>

<?php
if ($fID > 0) {
    $fo = File::getByID($fID);
   if (!is_object($fo)) {
        unset($fo);
    }
}
?>

<div class="form-group">
    <?php echo $form->label('Anchor Display Name', t('Anchor Display Name'));?>
    <?php print $form->text('anchor_name', $anchor_name);?>
</div>