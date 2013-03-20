<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2012 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Blog\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

use Tutorial\Models;

class PostController extends AbstractActionController
{
    public function viewAction()
    {
        $pim = $this->getServiceLocator()->get('PostIdentityMap');
        $postId = $this->getEvent()->getRouteMatch()->getParam('postId');
//        $pdm->getPostById($postId);
        $viewObj = new ViewModel(array(
            'title'   => 'Main Content',
            'content' => 'Actual content'
        ));

        $widgetObj = new ViewModel();
        $widgetObj->setTemplate('post/widget');

        $viewObj->addChild($widgetObj, 'widget');

        return $viewObj;
    }

}
