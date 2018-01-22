<?php


namespace DigipolisGent\Domainator9k\AppTypes\GenericBundle\Entity;


use DigipolisGent\Domainator9k\CoreBundle\Entity\AbstractApplication;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class GenericApplication
 * @package DigipolisGent\Domainator9k\AppTypes\GenericBundle\Entity
 *
 * @ORM\Entity()
 */
class GenericApplication extends AbstractApplication
{

    const TYPE = "GENERIC";

    /**
     * @return string
     */
    public static function getType()
    {
        return self::TYPE;
    }

    /**
     * @return array
     */
    public static function getTemplateReplacements(): array
    {
        $templateReplacements = parent::getTemplateReplacements();
        $templateReplacements['installProfile()'] =  'getInstallProfile()';

        return $templateReplacements;
    }
}