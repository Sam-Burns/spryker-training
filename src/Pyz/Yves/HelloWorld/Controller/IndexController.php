<?php

namespace Pyz\Yves\HelloWorld\Controller;

use Generated\Shared\Transfer\HelloWorldTransfer;
use Spryker\Yves\Kernel\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;

/**
 * @method \Pyz\Yves\Checkout\CheckoutFactory getFactory()
 */
class IndexController extends AbstractController
{

    /**
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return array|\Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function indexAction(Request $request)
    {
        return [];
    }

    /**
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return array|\Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function byNameAction(Request $request)
    {

        $requestedName = $request->attributes->get('name');

        $helloWorldTransfer = new HelloWorldTransfer();
        $helloWorldTransfer->setHelloWorld($requestedName);

        $client = $this->getClient();
        $result = $client->greet($helloWorldTransfer);

        return ['name' => $result->getHelloWorld()];
    }

}
