<?php

namespace Pyz\Client\HelloWorld;

use Pyz\Client\HelloWorld\Zed\HelloWorldStub;
use Spryker\Client\Kernel\AbstractFactory;

class HelloWorldFactory extends AbstractFactory
{

    /**
     * @return \Pyz\Client\HelloWorld\Zed\HelloWorldStubInterface
     */
    public function createZedStub()
    {
        return new HelloWorldStub($this->getZedRequestClient());
    }

    /**
     * @return \Spryker\Client\ZedRequest\ZedRequestClientInterface
     */
    protected function getZedRequestClient()
    {
        return $this->getProvidedDependency(HelloWorldDependencyProvider::CLIENT_ZED_REQUEST);
    }

}
