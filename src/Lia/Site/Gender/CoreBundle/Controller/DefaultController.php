<?php

namespace Lia\Site\Gender\CoreBundle\Controller;

use Lia\KernelBundle\Controller\ControllerBase;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController
    extends ControllerBase
{
    /**
     * @ Route("/")
     * @ Template()
     */
    public function indexAction()
    {
        //        $factory = $this->get('lia.factory.angular');
//        $uiGrid  = $factory->gridBuilder('grid1');
//
//        /** @var FieldConfigurationBag $field */
//        $field = $uiGrid->addConfigurationField('title', [], true);
//
//        $uiGrid->setData([
//            ['title'=> 'Title 1' , 'name'=> 'Name 1' , 'firstName'=> 'firstName1' ],
//            ['title'=> 'Title 2' , 'name'=> 'Name 2' , 'firstName'=> 'firstName2' ],
//            ['title'=> 'Title 3' , 'name'=> 'Name 3' , 'firstName'=> 'firstName3' ],
//            ['title'=> 'Title 4' , 'name'=> 'Name 4' , 'firstName'=> 'firstName4' ],
//            ['title'=> 'Title 5' , 'name'=> 'Name 5' , 'firstName'=> 'firstName5' ],
//            ['title'=> 'Title 6' , 'name'=> 'Name 6' , 'firstName'=> 'firstName6' ],
//            ['title'=> 'Title 7' , 'name'=> 'Name 7' , 'firstName'=> 'firstName7' ],
//            ['title'=> 'Title 8' , 'name'=> 'Name 8' , 'firstName'=> 'firstName8' ],
//            ['title'=> 'Title 9' , 'name'=> 'Name 9' , 'firstName'=> 'firstName9' ],
//            ['title'=> 'Title 10', 'name'=> 'Name 10', 'firstName'=> 'firstName10'],
//        ]);
//
//        return $this->renderByUserGrant(
//            '@LiaCmsCore/Home/home',
//            $blockOnly,
//            [
//                'uigrid'=> $uiGrid
//            ]
//        );
        return [];
    }
}
