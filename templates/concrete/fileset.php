<?php
defined('C5_EXECUTE') or die(_("Access Denied."));
if(!defined('BOOTSTRAP_PLUGIN'))
    return;

/**
 * Template for the bootstrap checkbox
 * $label => {string / boolean} define if label should be used and also define
* 			 the label content
 * $value => id of the selected image, 0 or undefined will result to unselected
 * 			 image
 * $name => {string} name
 * $opts:
 * 	[class] => {string} define class
 * 	[id] => {string} define unique identifier
 * 	[uId] => Set a specific user Id, from where the fileset is loaded. If
 * 	     	 set to false, current user will be used.
 *  [required] => This input can not be empty
 */
?>
<div id="<?= $opts['id'] ?>" class="form-group <?= $opts['class'] ?>">
    <?php if($label) : ?>
        <label for="<?= $name ?>"><?= $label ?></label>
    <?php endif ?>
    <select <?= $opts['required'] ? 'required' : '' ?> id="<?= $name ?>" name="<?= $name ?>" class="form-control">
        <?php foreach(\FileSet::getMySets(isset($opts['uId']) ? $opts['uId'] : false) as $fileset) : ?>
            <option
                <?= $fileset->fsID == $value ? 'selected="selected"' : '' ?>
                value="<?= $fileset->fsID ?>" >
                <?= $fileset->fsName ?>
            </option>
        <?php endforeach ?>
    </select>
</div>
