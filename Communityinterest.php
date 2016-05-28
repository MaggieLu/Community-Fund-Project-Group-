<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Communityinterest
 *
 * @ORM\Table(name="CommunityInterest")
 * @ORM\Entity
 */
class Communityinterest
{
    /**
     * @var string
     *
     * @ORM\Column(name="startDate", type="string", length=45, nullable=false)
     */
    private $startdate;

    /**
     * @var string
     *
     * @ORM\Column(name="userName", type="string", length=45)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $username;

    /**
     * @var string
     *
     * @ORM\Column(name="communityName", type="string", length=45)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $communityname;



    /**
     * Set startdate
     *
     * @param string $startdate
     * @return Communityinterest
     */
    public function setStartdate($startdate)
    {
        $this->startdate = $startdate;

        return $this;
    }

    /**
     * Get startdate
     *
     * @return string 
     */
    public function getStartdate()
    {
        return $this->startdate;
    }

    /**
     * Set username
     *
     * @param string $username
     * @return Communityinterest
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string 
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set communityname
     *
     * @param string $communityname
     * @return Communityinterest
     */
    public function setCommunityname($communityname)
    {
        $this->communityname = $communityname;

        return $this;
    }

    /**
     * Get communityname
     *
     * @return string 
     */
    public function getCommunityname()
    {
        return $this->communityname;
    }
}
