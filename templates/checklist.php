<?php
defined('C5_EXECUTE') or die(_("Access Denied."));
if(!defined('BOOTSTRAP_PLUGIN'))
    return;

/**
 * Template for the bootstrap checkbox
 * $label => {string / boolean} define if label should be used and also define
 * 			 the label content
 * $opts:
 * 	[class] => {string} define class
 * 	[id] => {string} define unique identifier
 * 	[disabled] => {boolean} disables all checkboxes
 *  [type] => {string} define message type, will be added as class
 *  [id] => {string} define unique identifier in form
 *  [inline] => {boolean} define if checklist should be shown inline
 * 	[options] => {array} array of different checkboxes
 * 	[
 * 		[0] => {string} define text to show
 * 		[1] => {string} define checkbox value
 * 		[2] => {string} define checkbox name
 * 		[3] => {boolean} this element disabled
 *  ]
 */
?>
<div id="<?= $opts['id'] ?>" class="form-group <?= $opts['class'] ?>">
    <?php if($label) : ?>
        <label><?= $label ?></label>
    <?php endif ?>
    <?php foreach($opts['options'] as $o) : ?>
    <div class="<?= $opts['inline'] ? 'checkbox-inline' : 'checkbox' ?>">
        <label>
            <input
                type="checkbox"
                name="<?= $o[2] ?>"
                value="<?= $o[1] ?>"
                <?= $opts['disabled'] || (isset($o[3]) && $o[3]) ? 'disabled' : '' ?> /><?= $o[0] ?>
        </label>
    </div>
    <?php endforeach ?>
</div>
