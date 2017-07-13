<?php

namespace Pyz\Zed\HelloWorld\Communication\Controller;

use Generated\Shared\Transfer\HelloWorldTransfer;
use Spryker\Zed\Kernel\Communication\Controller\AbstractGatewayController;

/**
 * @method \Pyz\Zed\HelloWorld\Business\HelloWorldFacade getFacade()
 */
class GatewayController extends AbstractGatewayController
{
    public function greetAction(HelloWorldTransfer $helloWorldTransfer)
    {
        $facade = $this->getFacade();
        $response = $facade->getGreeting($helloWorldTransfer);
        return $response;
    }
}
