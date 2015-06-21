<?php
defined('C5_EXECUTE') or die(_("Access Denied."));
/**
 * Template for the bootstrap checkbox
 * $label => {string / boolean} define if label should be used and also define
* 			 the label content
 * $value => define current value
 * $opts:
 * 	[class] => {string} define class
 * 	[id] => {string} define unique identifier
 * 	[options] => {array} array of different checkboxes
 * 	[placeholder] => {string} define a placeholder
 */
$al = Core::make('helper/concrete/asset_library');
?>
<div id="<?= $opts['id'] ?>" class="form-group <?= $opts['class'] ?>">
    <?php if($label) : ?>
        <label><?= $label ?></label>
    <?php endif ?>
    <?= $al->image('image', $opts['id'], $opts['placeholder'], null, array()) ?>
</div>
