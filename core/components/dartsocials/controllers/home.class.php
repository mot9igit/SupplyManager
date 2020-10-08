<?php

/**
 * The home manager controller for DARTSocials.
 *
 */
class DARTSocialsHomeManagerController extends modExtraManagerController
{
    /** @var DARTSocials $DARTSocials */
    public $DARTSocials;


    /**
     *
     */
    public function initialize()
    {
        $this->DARTSocials = $this->modx->getService('DARTSocials', 'DARTSocials', MODX_CORE_PATH . 'components/dartsocials/model/');
        parent::initialize();
    }


    /**
     * @return array
     */
    public function getLanguageTopics()
    {
        return ['dartsocials:default'];
    }


    /**
     * @return bool
     */
    public function checkPermissions()
    {
        return true;
    }


    /**
     * @return null|string
     */
    public function getPageTitle()
    {
        return $this->modx->lexicon('dartsocials');
    }


    /**
     * @return void
     */
    public function loadCustomCssJs()
    {
        $this->addCss($this->DARTSocials->config['cssUrl'] . 'mgr/main.css');
        $this->addJavascript($this->DARTSocials->config['jsUrl'] . 'mgr/dartsocials.js');
        $this->addJavascript($this->DARTSocials->config['jsUrl'] . 'mgr/misc/utils.js');
        $this->addJavascript($this->DARTSocials->config['jsUrl'] . 'mgr/misc/combo.js');
        $this->addJavascript($this->DARTSocials->config['jsUrl'] . 'mgr/widgets/items.grid.js');
        $this->addJavascript($this->DARTSocials->config['jsUrl'] . 'mgr/widgets/items.windows.js');
        $this->addJavascript($this->DARTSocials->config['jsUrl'] . 'mgr/widgets/home.panel.js');
        $this->addJavascript($this->DARTSocials->config['jsUrl'] . 'mgr/sections/home.js');

        $this->addHtml('<script type="text/javascript">
        DARTSocials.config = ' . json_encode($this->DARTSocials->config) . ';
        DARTSocials.config.connector_url = "' . $this->DARTSocials->config['connectorUrl'] . '";
        Ext.onReady(function() {MODx.load({ xtype: "dartsocials-page-home"});});
        </script>');
    }


    /**
     * @return string
     */
    public function getTemplateFile()
    {
        $this->content .= '<div id="dartsocials-panel-home-div"></div>';

        return '';
    }
}