<?php
defined('C5_EXECUTE') or die(_("Access Denied."));
if(!defined('BOOTSTRAP_PLUGIN'))
    return;

/**
 * Template for the bootstrap checkbox
 * $name => define name
 * $value => preset value of the textarea
 * $label => {string} define the label
 * $opts:
 * 	[class] => {string} define class
 * 	[id] => {string} define unique identifier
 * 	[disabled] => {boolean} disables all checkboxes
 * 	[rows] => define number of rows
 */
?>
<div id="<?= $opts['id'] ?>" class="textarea form-group <?= $opts['class'] ?>">
  <?php if($label) : ?>
      <label for="label-<?= $opts['id'] ?>">
        <?= $label ?>
      </label>
  <?php endif ?>
  <textarea id="label-<?= $opts['id'] ?>"
      name="<?= $name ?>"
      class="form-control"
      rows="<?= $opts['rows'] ?>"
      <?= $opts['disabled'] ? 'disabled' : ''?>><?= $value ?></textarea>
</div>
