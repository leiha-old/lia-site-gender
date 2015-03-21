<?php

namespace Lia\Site\Gender\CoreBundle;

use Lia\KernelBundle\Bundle\BundleBase;

class LiaSiteGenderCoreBundle
    extends BundleBase
{
    public function getAlias()
    {
        return 'site.gender';
    }

    public function getParent()
    {
        return 'LiaCmsCoreBundle';
    }
}
