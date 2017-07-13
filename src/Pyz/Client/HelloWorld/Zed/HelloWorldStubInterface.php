<?php

namespace Pyz\Client\HelloWorld\Zed;

use Generated\Shared\Transfer\HelloWorldTransfer;

interface HelloWorldStubInterface
{
    public function greet(HelloWorldTransfer $helloWorldTransfer) : HelloWorldTransfer;
}
