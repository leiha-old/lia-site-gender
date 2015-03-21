<?php

namespace Lia\Site\Gender\CoreBundle\DependencyInjection;

use Lia\Kernel\ThemeBundle\Core\AssetBag;
use Lia\Kernel\ThemeBundle\Core\SubscriberBase;

class ThemeSubscriberAutoService
    extends SubscriberBase
{
    /**
     * @return string
     */
    public function getPathOfAsset()
    {
        return '/bundles/liasitegendercore/';
    }

    /**
     * Allows to set the assets for the bundle
     * They will be on the top of the page
     * @param AssetBag $bag
     */
    public function setTop(AssetBag $bag)
    {
        $bag->styleSheet->files->set([
            'themes/default/css/base.css',
            'themes/default/css/base.menu.css',
        ]);
    }

    /**
     * Allows to set the assets for the bundle
     * They will be on the bottom of the page
     * @param AssetBag $bag
     */
    public function setBottom(AssetBag $bag)
    {

    }
}