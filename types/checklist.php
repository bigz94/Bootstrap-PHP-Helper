<?php
namespace Concrete\Package\Tableeditor\Core\Bootstrap\Types;

defined('C5_EXECUTE') or die(_("Access Denied."));

class Checklist extends CoreType {

    /**
     * Render the checklist
     * @param  [type] $label [description]
     * @param  [type] $name  [description]
     * @param  [type] $value [description]
     * @param  [type] $opts  [description]
     * @return [type]        [description]
     */
    public function render() {
        $out = '<ul class="inputs-list">';
        foreach($this->opts['options'] as $o) :
            $out .= '<li><label><input type="checkbox" name="'.$o[1].'" value="'.$o[2].'"><span>'.$o[0].'</span></label></li>';
        endforeach;
        $out .= '</ul>';
        return $this->wrap($out);
    }

}

?>
