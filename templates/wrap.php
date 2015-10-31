<?php defined('C5_EXECUTE') or die(_("Access Denied."));
if(!defined('BOOTSTRAP_PLUGIN'))
    return;

/**
 * Template for the wrap
 * using $opt variable:
 * [message] => {string} define a message
 * [type] => {string} define message type, will be added as class
 * [id] => {string} define unique identifier in form
 * [label] => {string / boolean} define if label should be used and define the
 * 			  label content
 * [content] => {string} define content which is shown in the wrapper
 * [include] => {string} define a file to include
 */
?>
<div class="clearfix <?= $type ?>">
    <?= $content ? $content : '' ?>
    <?= $include ? include($include) : '' ?>
</div>
