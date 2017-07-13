<?php

namespace Pyz\Zed\HelloWorld\Business;

use Generated\Shared\Transfer\HelloWorldTransfer;
use Propel\Runtime\Collection\ObjectCollection;
use Spryker\Zed\Kernel\Business\AbstractBusinessFactory;

/**
 * @method \Pyz\Zed\HelloWorld\HelloWorldConfig getConfig()
 * @method \Pyz\Zed\HelloWorld\Persistence\HelloWorldQueryContainer getQueryContainer()
 */
class HelloWorldBusinessFactory extends AbstractBusinessFactory
{
    public function getGreetingAugmenter() : GreetingAugmenter
    {
        return $this->getProvidedDependency('greeting-augmenter');
    }

    public function createName($name)
    {
        $this->getQueryContainer()->querySaveGreeting($name);
    }

    public function getPeopleGreeted()
    {
        return $this->getQueryContainer()->getAll()->find()->toArray();
    }
}
