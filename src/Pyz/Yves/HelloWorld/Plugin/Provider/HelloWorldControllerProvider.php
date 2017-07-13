<?php

namespace Pyz\Yves\HelloWorld\Plugin\Provider;

use Pyz\Yves\Application\Plugin\Provider\AbstractYvesControllerProvider;
use Silex\Application;

class HelloWorldControllerProvider extends AbstractYvesControllerProvider
{

    const HELLOWORLD_INDEX = 'helloworld-index';

    /**
     * @param \Silex\Application $app
     *
     * @return void
     */
    protected function defineControllers(Application $app)
    {
        $this->createGetController('/hello-world', static::HELLOWORLD_INDEX, 'HelloWorld', 'Index', 'index');
        $this->createGetController('/hello-world/{name}', static::HELLOWORLD_INDEX, 'HelloWorld', 'Index', 'byName');
    }

}
