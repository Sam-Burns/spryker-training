<?php

namespace Pyz\Zed\HelloWorld\Persistence;

use Spryker\Zed\Kernel\Persistence\AbstractPersistenceFactory;
use Orm\Zed\HelloWorld\Persistence\PeopleISaidHelloTo;

/**
 * @method \Pyz\Zed\HelloWorld\HelloWorldConfig getConfig()
 * @method \Pyz\Zed\HelloWorld\Persistence\HelloWorldQueryContainer getQueryContainer()
 */
class HelloWorldPersistenceFactory extends AbstractPersistenceFactory
{
    public function getGreetingsTable()
    {
        return new PeopleISaidHelloTo();
    }
}
