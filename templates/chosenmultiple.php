<?php

use \Concrete\Package\Tableeditor\Controller\DbParser;

defined('C5_EXECUTE') or die(_("Access Denied."));

/**
 * Template for multiple select box using the choosen library
 * $label => {string / boolean} define if label should be used and also define
 * 			 the label content
 * $value => {array / string} an array of ids or the id of the selected items
 *
 * $opts:
 * 	[class] => {string} define class
 * 	[id] => {string} define unique identifier
 * 	[disabled] => {boolean} disables all checkboxes
 *  [type] => {string} define message type, will be added as class
 *  [id] => {string} define unique identifier in form
 *  [inline] => {boolean} define if checklist should be shown inline
 *  [choosen-options] => {object} an object with special choosen settings
 *  {
 *   	extend if wanted
 *  	// [max] => {number} Maximum of possible selection (select one then 1)
 *  	[multiple] => {boolean} if possible to select multiple options
 *  }
 * 	[options] => {array} array of a list of items
 * 	[
 * 		[0] item value => {string} text to show
 *  ]
 */

$value = is_array($value) ? $value : [$value];
?>
<div id="<?= $opts['id'] ?>" class="form-group chosen-multiple <?= $opts['class'] ?>">
    <label class="control-label"><?= $label ?></label>
    <div class="chosen-multiple-select">
        <select class="form-control" name="<?= $name ?>[]" <?= $opts['disabled'] ? 'disabled' : '' ?> multiple="multiple">
            <?php foreach($opts['options'] as $val => $text) : ?>
                <option  value="<?= $val ?>" <?= in_array($val, $value) ? 'selected="selected"' : '' ?>><?= $text ?></option>
            <?php endforeach ?>
        </select>
    </div>
</div>

<script>
console.log($.fn.jquery);
$(document).ready(function() {
    $('.chosen-multiple select[name="<?= $name ?>[]"]').chosen({
        width: '100%'
    });
});
</script>
