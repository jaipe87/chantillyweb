<?php
include_once './lib/smarty/Smarty.class.php';


class TplFactory {

    public static function crearTpl() {

        $DesignMobile=IsMobile();
     
        $tpl = new Smarty();


        $tpl->caching = 0;
        $tpl->setTemplateDir('./view/templates');
        $tpl->setCompileDir('./view/templates_c');
        $tpl->setCacheDir('./view/cache');
        $tpl->setConfigDir('./view/configs');

        $tpl->assign('IsMobile',$DesignMobile);
        $tpl->assign('RUTA_HTTP',RUTA_HTTP );

       


        $tpl->assign('asset', RUTA_HTTP . '/view/templates/assets');

        return $tpl;
    }

}
