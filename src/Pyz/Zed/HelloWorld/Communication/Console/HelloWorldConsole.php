<?php

namespace Pyz\Zed\HelloWorld\Communication\Console;

use Spryker\Zed\Kernel\Communication\Console\Console;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * @method \Pyz\Zed\HelloWorld\Business\HelloWorldFacade getFacade()
 */
class HelloWorldConsole extends Console
{

    const COMMAND_NAME = 'some:command';
    const DESCRIPTION = 'Describe me!';

    /**
     * @return void
     */
    protected function configure()
    {
        $this->setName(static::COMMAND_NAME)
            ->setDescription(static::DESCRIPTION);
    }

    /**
     * @param \Symfony\Component\Console\Input\InputInterface $input
     * @param \Symfony\Component\Console\Output\OutputInterface $output
     *
     * @return int|null
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $messenger = $this->getMessenger();

        $messenger->info(sprintf(
            'You just executed %s!',
            static::COMMAND_NAME
        ));

        return static::CODE_SUCCESS;
    }

}
