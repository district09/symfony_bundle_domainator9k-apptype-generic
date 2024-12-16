<?php


namespace DigipolisGent\Domainator9k\AppTypes\GenericBundle\Entity;


use DigipolisGent\Domainator9k\AppTypes\GenericBundle\Form\Type\GenericApplicationFormType;
use DigipolisGent\Domainator9k\CoreBundle\Entity\AbstractApplication;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Form\Extension\Core\Type\FormType;

/**
 * Class GenericApplication
 * @package DigipolisGent\Domainator9k\AppTypes\GenericBundle\Entity
 */
#[ORM\Table(name: 'generic_application')]
#[ORM\Entity]
class GenericApplication extends AbstractApplication
{

    const TYPE = "GENERIC";

    /**
     * @return string
     */
    public static function getApplicationType(): string
    {
        return self::TYPE;
    }

    /**
     * @return FormType
     */
    public static function getFormType(): string
    {
        return GenericApplicationFormType::class;
    }

}
