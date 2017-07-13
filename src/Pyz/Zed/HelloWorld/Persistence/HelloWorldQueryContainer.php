<?php
namespace Pyz\Zed\HelloWorld\Persistence;

use Orm\Zed\Product\Persistence\SpyProductQuery;
use Spryker\Zed\Kernel\Persistence\AbstractQueryContainer;
use Pyz\Zed\HelloWorld\Persistence\HelloWorldPersistenceFactory;

/**
 * @method HelloWorldPersistenceFactory getFactory()
 */
class HelloWorldQueryContainer extends AbstractQueryContainer
{
    public function querySaveGreeting(string $name)
    {
        $this
            ->getFactory()
            ->getGreetingsTable()
            ->setHelloWorld($name)
            ->save();
    }
}
