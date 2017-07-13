<?php
namespace Pyz\Yves\Checkout\Form\Steps;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class SmashedUpForm extends AbstractType
{
    const SMASHED_UP = 'smashed_up';

    /**
     * @return string
     */
    public function getName()
    {
        return 'smashedUpForm';
    }

    /**
     * @param \Symfony\Component\Form\FormBuilderInterface $builder
     * @param array $options
     *
     * @return void
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $this->addAllSmashedUpCheckbox($builder);
    }

    protected function addAllSmashedUpCheckbox(FormBuilderInterface $builder) : SmashedUpForm
    {
        $builder->add(
            self::SMASHED_UP,
            'checkbox',
            [
                'required' => false,
                'label' => 'Should your product(s) be all smashed up to shit before we post them to you?'
            ]
        );

        return $this;
    }
}
