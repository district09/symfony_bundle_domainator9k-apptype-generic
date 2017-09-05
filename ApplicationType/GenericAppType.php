<?php

namespace DigipolisGent\Domainator9k\AppTypes\GenericBundle\ApplicationType;

use DigipolisGent\Domainator9k\CoreBundle\Entity\BaseAppType;
use DigipolisGent\Domainator9k\AppTypes\GenericBundle\Entity\GenericSettings;
use DigipolisGent\Domainator9k\AppTypes\GenericBundle\Form\GenericSettingsType;
use Digip\DeployBundle\Entity\Settings;
use Digip\DeployBundle\Entity\AppEnvironment;

class GenericAppType extends BaseAppType
{
    protected $settingsFormClass = GenericSettingsType::class;
    protected $settingsEntityClass = GenericSettings::class;

    public function getConfigFiles(AppEnvironment $env, array $servers, Settings $settings)
    {
        return [];
    }
}
