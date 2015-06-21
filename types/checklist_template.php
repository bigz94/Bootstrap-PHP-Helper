<?php
defined('C5_EXECUTE') or die(_("Access Denied."));
/**
 * Template for the bootstrap checkbox
 * $opts:
 * 	[class] => {string} define class
 * 	[id] => {string} define unique identifier
 * 	[disabled] => {boolean} define if input is enabled
 *  [message] => {string} define a message
 *  [type] => {string} define message type, will be added as class
 *  [id] => {string} define unique identifier in form
 *  [label] => {string / boolean} define if label should be used and define the
 * 			   label content
 * 	[options] => {array} array of different checkboxes
 * 	[
 * 		[0] => {string} define text to show
 * 		[1] => {string} define checkbox value
 * 		[2] => {string} define checkbox name
 *  ]
 */
?>
<ul class="inputs-list"><li>
    <label>
        <input type="checkbox" name="value1" value="show1"><span><?= $content ?></span>
    </label>
    </li>
    <li>
    <label>
        <input type="checkbox" name="value1" value="show1">
        <span>name1</span>
    </label>
    </li>
</ul>
