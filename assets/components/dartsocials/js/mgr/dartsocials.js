var DARTSocials = function (config) {
    config = config || {};
    DARTSocials.superclass.constructor.call(this, config);
};
Ext.extend(DARTSocials, Ext.Component, {
    page: {}, window: {}, grid: {}, tree: {}, panel: {}, combo: {}, config: {}, view: {}, utils: {}
});
Ext.reg('dartsocials', DARTSocials);

DARTSocials = new DARTSocials();