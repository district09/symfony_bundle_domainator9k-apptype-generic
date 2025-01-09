<?php


namespace DigipolisGent\Domainator9k\AppTypes\GenericBundle\Form\Type;

use DigipolisGent\Domainator9k\AppTypes\GenericBundle\Entity\GenericApplication;
use DigipolisGent\Domainator9k\CoreBundle\Form\Type\AbstractApplicationFormType;
use Symfony\Component\OptionsResolver\OptionsResolver;

/**
 * Class GenericApplicationFormType
 * @package DigipolisGent\Domainator9k\AppTypes\GenericBundle\Form\Type
 */
class GenericApplicationFormType extends AbstractApplicationFormType
{

    public function configureOptions(OptionsResolver $resolver): void
    {
        parent::configureOptions($resolver);
        $resolver->setDefault('data_class', GenericApplication::class);
    }
}
