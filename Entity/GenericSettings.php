<?php

namespace DigipolisGent\Domainator9k\AppTypes\GenericBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

//todo basesetup, daar app en id in, installprofile in extended entity

/**
 * @ORM\Entity
 * @ORM\Table(name="generic_settings")
 */
class GenericSettings
{
    /**
     * @var int
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\ManyToOne(targetEntity="Digip\DeployBundle\Entity\Application")
     * @ORM\JoinColumn(name="application_id", referencedColumnName="id")
     **/
    protected $application;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getApplication()
    {
        return $this->application;
    }

    /**
     * @param mixed $application
     */
    public function setApplication($application)
    {
        $this->application = $application;
    }
}
