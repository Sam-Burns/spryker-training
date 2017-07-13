<?php

namespace Pyz\Client\HelloWorld;

use Generated\Shared\Transfer\HelloWorldTransfer;
use Spryker\Client\Kernel\AbstractClient;

/**
 * @method \Pyz\Client\HelloWorld\HelloWorldFactory getFactory()
 */
class HelloWorldClient extends AbstractClient implements HelloWorldClientInterface
{

    /**
     * @return \Pyz\Client\HelloWorld\Zed\HelloWorldStubInterface
     */
    protected function getZedStub()
    {
        return $this->getFactory()->createZedStub();
    }

    public function greet(HelloWorldTransfer $helloWorldTransfer)
    {
        return $this->getZedStub()->greet($helloWorldTransfer);
    }

}
