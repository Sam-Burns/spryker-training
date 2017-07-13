<?php

namespace Pyz\Zed\HelloWorld\Business;

use Generated\Shared\Transfer\HelloWorldTransfer;
use Spryker\Zed\Kernel\Business\AbstractFacade;

/**
 * @method \Pyz\Zed\HelloWorld\Business\HelloWorldBusinessFactory getFactory()
 */
class HelloWorldFacade extends AbstractFacade implements HelloWorldFacadeInterface
{
    public function getGreeting(HelloWorldTransfer $helloWorldTransfer) : HelloWorldTransfer
    {
        $greetingAugmenter = $this->getFactory()->getGreetingAugmenter();

        $originalGreeting = $helloWorldTransfer->getHelloWorld();
        $newMessage = $greetingAugmenter->augmentGreeting($originalGreeting);
        $result = new HelloWorldTransfer();
        $result->setHelloWorld($newMessage);

        $this->getFactory()->createName($newMessage);

        return $result;
    }

    /**
     * @return string[]
     */
    public function getEveryoneGreeted() : array
    {
        $peopleGreeted = $this->getFactory()->getPeopleGreeted();
        return array_column($peopleGreeted, 'HelloWorld');
    }
}
