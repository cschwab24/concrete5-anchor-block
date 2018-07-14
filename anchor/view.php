<?php 
    defined('C5_EXECUTE') or die("Access Denied.");
    $c = Page::getCurrentPage();
    $anchorHandle = strtolower(str_replace(' ', '-', $anchor_name));
?>

<div class="anchor-block" id="<?php echo $anchorHandle; ?>" data-name="<?php echo $anchor_name; ?>">Anchor: <?php echo $anchor_name; ?></div>