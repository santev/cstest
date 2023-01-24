<?php

namespace cstest\src;

use Smarty;

/**
 * Description of tpl
 *
 * @author den
 */
class template extends Smarty {

    public function __construct() {
        parent::__construct();

        $this->setTemplateDir('tpl/template');
        $this->setConfigDir('tpl/config');
        $this->setCompileDir('tpl/compile');
        $this->setCacheDir('tpl/cache');
        //$this->testInstall();
        //$this->caching = Smarty::CACHING_LIFETIME_CURRENT;
        $this->assign('app_name', 'cstest');

    }

    public function getListHtml($array, $tpl_name) {
        //var_dump($array);
        $tpl = new template();
        
        $tpl->assign('array', $array);
        
        $html = $tpl->fetch($tpl_name);
        
        return $html;
    }

}
