<?php

namespace Pyz\Zed\HelloWorld\Communication\Controller;

use Spryker\Zed\Kernel\Communication\Controller\AbstractController;

/**
 * @method \Pyz\Zed\HelloWorld\Business\HelloWorldFacade getFacade()
 * @method \Pyz\Zed\HelloWorld\Communication\HelloWorldCommunicationFactory getFactory()
 * @method \Pyz\Zed\HelloWorld\Persistence\HelloWorldQueryContainer getQueryContainer()
 */
class IndexController extends AbstractController
{

    /**
     * @return array
     */
    public function indexAction()
    {
        return $this->viewResponse([
            'test' => 'Greetings!',
        ]);
    }

}
