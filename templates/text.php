<?php
defined('C5_EXECUTE') or die(_("Access Denied."));
/**
 * Template for the bootstrap checkbox
 * $label => {string} define the label
 * $opts:
 * 	[class] => {string} define class
 * 	[id] => {string} define unique identifier
 * 	[disabled] => {boolean} disables all checkboxes
 * 	[rows] => define number of rows
 * 	[placeholder] => placeholder
 */
?>
<div id="<?= $opts['id'] ?>" class="textarea form-group <?= $opts['class'] ?>">
  <?php if($label) : ?>
      <label for="label-<?= $opts['id'] ?>">
        <?= $label ?>
      </label>
  <?php endif ?>
  <input id="label-<?= $opts['id'] ?>"
    value="<?= $value ?>"
    name="<?= $name ?>"
    class="form-control"
    type="text"
    rows="<?= $opts['rows'] ?>"
    placeholder="<?= $opts['placeholder'] ?>"
        <?= $opts['disabled'] ? 'disabled' : ''?>>
</div>
