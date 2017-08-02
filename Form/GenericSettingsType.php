<?php

namespace DigipolisGent\Domainator9k\AppTypes\GenericBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use DigipolisGent\Domainator9k\AppTypes\GenericBundle\Entity\GenericSettings;

class GenericSettingsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => GenericSettings::class,
        ));
    }

    public function getBlockPrefix()
    {
        return 'generic_deploy_type_settings';
    }
}
