<?php
defined('C5_EXECUTE') or die(_("Access Denied."));
/**
 * Template for the bootstrap checkbox
 * $label => {string / boolean} define if label should be used and also define
* 			 the label content
 * $value => id of the selected image, 0 or undefined will result to unselected
 * 			 image
 * $opts:
 * 	[class] => {string} define class
 * 	[id] => {string} define unique identifier
 * 	[placeholder] => {string} define a placeholder
 * 	[options] => {array} options which are used for the image
 */
$al = Core::make('helper/concrete/asset_library');
$f = File::getByID($value);
?>
<div id="<?= $opts['id'] ?>" class="form-group <?= $opts['class'] ?>">
    <?php if($label) : ?>
        <label for="<?= $name ?>"><?= $label ?></label>
    <?php endif ?>
    <?= $value ?>
    <?= $al->image('img-' . $opts['id'], $name, $opts['placeholder'], $f, $opts['options']) ?>
</div>
