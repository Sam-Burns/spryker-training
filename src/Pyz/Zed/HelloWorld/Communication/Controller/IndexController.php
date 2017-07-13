<?php

namespace Pyz\Zed\HelloWorld\Communication\Controller;

use Spryker\Zed\Kernel\Communication\Controller\AbstractController;
use Pyz\Zed\HelloWorld\Business\HelloWorldFacade;
use Pyz\Zed\HelloWorld\Communication\HelloWorldCommunicationFactory;
use Pyz\Zed\HelloWorld\Persistence\HelloWorldQueryContainer;

/**
 * @method HelloWorldFacade getFacade()
 * @method HelloWorldCommunicationFactory getFactory()
 * @method HelloWorldQueryContainer getQueryContainer()
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

    public function listAction()
    {
        $businessFacade = $this->getFacade();
        $peopleGreeted = $businessFacade->getEveryoneGreeted();
        return $this->viewResponse([
            'list' => var_export($peopleGreeted, true)
        ]);
    }
}
