<?php

/**
 *
 * @see XenForo_SitemapHandler_Thread
 */
class ThemeHouse_NoIndex_Extend_XenForo_SitemapHandler_Thread extends XFCP_ThemeHouse_NoIndex_Extend_XenForo_SitemapHandler_Thread
{

    public function isIncluded(array $entry, array $viewingUser)
    {
        $xenOptions = XenForo_Application::get('options');

        if (!$xenOptions->th_noIndex_googleOnly) {
            if ($entry['post_date'] <
                 (XenForo_Application::$time - ($xenOptions->th_noIndex_threadDays * 24 * 60 * 60))) {
                return false;
            }
        }

        return parent::isIncluded($entry, $viewingUser);
    } /* END isIncluded */
}