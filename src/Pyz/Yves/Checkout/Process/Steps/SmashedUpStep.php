<?php
namespace Pyz\Yves\Checkout\Process\Steps;

use Pyz\Yves\Checkout\Form\Steps\SmashedUpForm;
use Spryker\Shared\Kernel\Transfer\AbstractTransfer;
use Spryker\Yves\StepEngine\Dependency\Plugin\Handler\StepHandlerPluginCollection;
use Symfony\Component\HttpFoundation\Request;

class SmashedUpStep extends AbstractBaseStep
{
    /**
     * @var \Spryker\Yves\StepEngine\Dependency\Plugin\Handler\StepHandlerPluginCollection
     */
    protected $plugins;

    /**
     * @param StepHandlerPluginCollection $plugins
     * @param string $stepRoute
     * @param string $escapeRoute
     */
    public function __construct(
        StepHandlerPluginCollection $plugins,
        $stepRoute,
        $escapeRoute
    ) {
        parent::__construct($stepRoute, $escapeRoute);
        $this->plugins = $plugins;
    }

    /**
     * @param \Spryker\Shared\Kernel\Transfer\AbstractTransfer $quoteTransfer
     *
     * @return bool
     */
    public function requireInput(AbstractTransfer $quoteTransfer)
    {
        return true;
    }

    /**
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @param \Spryker\Shared\Kernel\Transfer\AbstractTransfer|\Generated\Shared\Transfer\QuoteTransfer $quoteTransfer
     *
     * @return \Spryker\Shared\Kernel\Transfer\AbstractTransfer
     */
    public function execute(Request $request, AbstractTransfer $quoteTransfer)
    {
        $formInputId = SmashedUpForm::SMASHED_UP;
        $userInput = $request->attributes->get($formInputId);
        $quoteTransfer->setSmashedUp($userInput);
        return $quoteTransfer;
    }

    /**
     * @param \Spryker\Shared\Kernel\Transfer\AbstractTransfer|\Generated\Shared\Transfer\QuoteTransfer $quoteTransfer
     *
     * @return bool
     */
    public function postCondition(AbstractTransfer $quoteTransfer)
    {
        return $quoteTransfer->getSmashedUp() !== null;
    }

    /**
     * @param \Spryker\Shared\Kernel\Transfer\AbstractTransfer $dataTransfer
     *
     * @return bool
     */
    public function isBreadcrumbItemEnabled(AbstractTransfer $dataTransfer)
    {
        return $this->postCondition($dataTransfer);
    }
}
