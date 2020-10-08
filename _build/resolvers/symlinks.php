<?php
/** @var xPDOTransport $transport */
/** @var array $options */
/** @var modX $modx */
if ($transport->xpdo) {
    $modx =& $transport->xpdo;

    $dev = MODX_BASE_PATH . 'Extras/DARTSocials/';
    /** @var xPDOCacheManager $cache */
    $cache = $modx->getCacheManager();
    if (file_exists($dev) && $cache) {
        if (!is_link($dev . 'assets/components/dartsocials')) {
            $cache->deleteTree(
                $dev . 'assets/components/dartsocials/',
                ['deleteTop' => true, 'skipDirs' => false, 'extensions' => []]
            );
            symlink(MODX_ASSETS_PATH . 'components/dartsocials/', $dev . 'assets/components/dartsocials');
        }
        if (!is_link($dev . 'core/components/dartsocials')) {
            $cache->deleteTree(
                $dev . 'core/components/dartsocials/',
                ['deleteTop' => true, 'skipDirs' => false, 'extensions' => []]
            );
            symlink(MODX_CORE_PATH . 'components/dartsocials/', $dev . 'core/components/dartsocials');
        }
    }
}

return true;