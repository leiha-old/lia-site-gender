<?php

namespace Lia\Site\Gender\UserBundle;

use Lia\KernelBundle\Bundle\BundleBase;

class LiaSiteGenderUserBundle
    extends BundleBase
{
    public function getAlias()
    {
        return 'site.gender.user';
    }

    public function getParent()
    {
        return 'LiaCmsUserBundle';
    }
}
