DARTSocials.page.Home = function (config) {
    config = config || {};
    Ext.applyIf(config, {
        components: [{
            xtype: 'dartsocials-panel-home',
            renderTo: 'dartsocials-panel-home-div'
        }]
    });
    DARTSocials.page.Home.superclass.constructor.call(this, config);
};
Ext.extend(DARTSocials.page.Home, MODx.Component);
Ext.reg('dartsocials-page-home', DARTSocials.page.Home);