<?php

namespace Pyz\Zed\HelloWorld\Communication\Controller;

use Generated\Shared\Transfer\HelloWorldTransfer;
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

    public function listAction()
    {
        $businessFacade = $this->getFacade();

        $peopleGreeted = $businessFacade->getEveryoneGreeted();

        return $this->viewResponse([
            'list' => var_export($peopleGreeted, true)
        ]);
    }
}
