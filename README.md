## What it does

This is a quick helper library I started building for myself to use for PHP prototyping.

It generates form elements for [Bootstrap, from Twitter](http://twitter.github.com/bootstrap/) because I use them a lot for prototyping, but find they end up kind of messy and a pain in the ass to keep clean. There are plenty more to make and different features to add to them, but probably only as I need them.

## Currently Supports

+ Forms with labels on the left
+ text inputs, textareas, selects, (almost)multiselects, checkbox lists
+ Prepended text on inputs
+ Generates errors classes found with with definable $error_callback.
+ $error_callback defaults to CodeIgniter form_error() method

## How
	// Load the library however you need, this is an example from use in CodeIgniter.
	<?= $this->bootstrapped->input("Sale Price", "sale_price", set_value('sale_price'), array('prepend'=>'$')); ?>
	
	
--------
Credit obviously goes to [Bootstrap, from Twitter](http://twitter.github.com/bootstrap/) for the HTML generated by these methods.