<?php

namespace Pyz\Client\HelloWorld\Zed;

use Generated\Shared\Transfer\HelloWorldTransfer;
use Spryker\Client\ZedRequest\Stub\ZedRequestStub;

class HelloWorldStub extends ZedRequestStub implements HelloWorldStubInterface
{
    public function greet(HelloWorldTransfer $helloWorldTransfer) : HelloWorldTransfer
    {
        return $this->zedStub->call('/hello-world/gateway/greet', $helloWorldTransfer);
    }
}
