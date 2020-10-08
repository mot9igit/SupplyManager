Ext.onReady(function () {
    DARTSocials.config.connector_url = OfficeConfig.actionUrl;

    var grid = new DARTSocials.panel.Home();
    grid.render('office-dartsocials-wrapper');

    var preloader = document.getElementById('office-preloader');
    if (preloader) {
        preloader.parentNode.removeChild(preloader);
    }
});