<?php
namespace Concrete\Package\Tableeditor\Core\Bootstrap;

defined('C5_EXECUTE') or die(_("Access Denied."));

/**
 * Concrete5 version of the bootstrapped, loading custom
 * templates created for the concrete5 cms library
 */

class ConcreteBootstrapped extends Bootstrapped {

    /**
     * Check if a concrete5 version of the given template exists and uses
     * it instead.
     * @param  [type] $label    [description]
     * @param  [type] $name     [description]
     * @param  [type] $value    [description]
     * @param  [type] $opts     [description]
     * @param  [type] $template [description]
     * @return [type]           [description]
     */
    protected function loadTemplate($label, $name, $value, $opts, $template) {
        if(file_exists(dirname(__FILE__) . '/templates/concrete/' . $template . '.php')) {
            $template = 'concrete/' . $template;
        }
        $content = parent::loadTemplate($label, $name, $value, $opts, $template);
        return $content;
    }

}
