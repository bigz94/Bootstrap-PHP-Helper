<?php
defined('C5_EXECUTE') or die(_("Access Denied."));
/**
 * Template for multiple select box using the choosen library
 * $label => {string / boolean} define if label should be used and also define
 * 			 the label content
 * $value => an array with the ids of the selected items
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
 *  	[] ...
 *  }
 * 	[options] => {array} array of a list of items
 * 	[
 * 		[0] item id => {string} define text to show
 * 		[1] => {string} define checkbox value
 * 		[2] => {string} define checkbox name
 * 		[3] => {boolean} this element disabled
 *  ]
 */

?>
