<?php
namespace Concrete\Package\Tableeditor\Core\Bootstrap\Types;

defined('C5_EXECUTE') or die(_("Access Denied."));

/**
 * Contains the core functionalities for the types.
 * Functions need to be overriden by the children
 */
class CoreType {

    /** @var [type] [description] */
	public $error_callback = FALSE;
     /** @var [type] class as html created (class="$args[class]") */
    public $classes;
     /** @var [type] Contains id as html (id="$args[id]") */
    public $id;
    /** @var [type] [description] */
    public $label;
    /** @var [type] [description] */
    public $name;
    /** @var [type] [description] */
    public $value;
    /** @var [type] [description] */
    public $opts;

    /**
     * [__constructor description]
     * @param  [type] $label [description]
     * @param  [type] $name  [description]
     * @param  [type] $value [description]
     * @param  [type] $args  [description]
     * @return [type]        [description]
     */
    public function __construct($name, $value, $args, $label = false) {
        $this->label = $label;
        $this->name = $name;
        $this->value = $value;
        $this->opts = array_merge(array(
			"class"		=> "",
			"prepend"	=> "",
			"id"		=> "",
			"rows"		=> "3",
			"disabled"	=> false,
			"options"	=> array()
		), $args);

        if($this->error_callback == FALSE && function_exists('form_error')){
            $this->error_callback = "form_error";
        }
    }

	/**
	 * Set the error callback method for checking to see if there was an error with the field
	 */
	public function set_error_method($callback) {
		$this->error_callback = $callback;
	}

	/**
	 * Error check handler.
	 * Returns the boolean result of the error_callback method if set
	 */
	private function error($name) {
		return !empty($this->error_callback) && call_user_func($this->error_callback, $name);
	}

    /**
     * Renders the field, so it can be edited
     * @return string Generated html
     */
    public function render() {
        throw new \Exception('Not implemented from childclass');
    }

    /**
     * Warp function
     * @return [type] [description]
     */
    public function wrap($string) {
        $out = '<div class="clearfix'.($this->error($this->name) ? " error" : "").'">';
        $out .=  $this->label ? $this->label($string) : $string;
        $out .= '</div>';
        return $out;
    }

    /**
     * create a label around the rendered
     * @return string [description]
     */
    public function label($string) {
		$out = '<label for="'.$this->opts['id'].'">'. $this->label .'</label><div class="input">';
        $out .= $string;
		$out .= '</div>';
        return $out;
    }

}

?>
