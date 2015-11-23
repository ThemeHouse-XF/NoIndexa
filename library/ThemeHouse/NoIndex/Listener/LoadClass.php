<?php

class ThemeHouse_NoIndex_Listener_LoadClass extends ThemeHouse_Listener_LoadClass
{

    protected function _getExtendedClasses()
    {
        return array(
            'ThemeHouse_NoIndex' => array(
                'sitemap' => array(
                    'XenForo_SitemapHandler_Thread'
                ), /* END 'sitemap' */
            ), /* END 'ThemeHouse_NoIndex' */
        );
    } /* END _getExtendedClasses */

    public static function loadClassSitemap($class, array &$extend)
    {
        $extend = self::createAndRun('ThemeHouse_NoIndex_Listener_LoadClass', $class, $extend, 'sitemap');
    } /* END loadClassSitemap */
}