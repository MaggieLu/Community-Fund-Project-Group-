<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Project
 *
 * @ORM\Table(name="Project")
 * @ORM\Entity
 */
class Project
{
    /**
     * @var string
     *
     * @ORM\Column(name="projectName", type="string", length=45, nullable=false)
     */
    private $projectname;

    /**
     * @var string
     *
     * @ORM\Column(name="communityName", type="string", length=45, nullable=false)
     */
    private $communityname;

    /**
     * @var string
     *
     * @ORM\Column(name="initiatorUserName", type="string", length=45, nullable=false)
     */
    private $initiatorusername;

    /**
     * @var string
     *
     * @ORM\Column(name="projectDescription", type="string", length=200, nullable=false)
     */
    private $projectdescription;

    /**
     * @var integer
     *
     * @ORM\Column(name="goalAmount", type="integer", nullable=false)
     */
    private $goalamount;

    /**
     * @var integer
     *
     * @ORM\Column(name="curentAmount", type="integer", nullable=false)
     */
    private $curentamount;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="startDate", type="datetime", nullable=false)
     */
    private $startdate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="finishDate", type="datetime", nullable=false)
     */
    private $finishdate;

    /**
     * @var integer
     *
     * @ORM\Column(name="projectID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $projectid;



    /**
     * Set projectname
     *
     * @param string $projectname
     * @return Project
     */
    public function setProjectname($projectname)
    {
        $this->projectname = $projectname;

        return $this;
    }

    /**
     * Get projectname
     *
     * @return string 
     */
    public function getProjectname()
    {
        return $this->projectname;
    }

    /**
     * Set communityname
     *
     * @param string $communityname
     * @return Project
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

    /**
     * Set initiatorusername
     *
     * @param string $initiatorusername
     * @return Project
     */
    public function setInitiatorusername($initiatorusername)
    {
        $this->initiatorusername = $initiatorusername;

        return $this;
    }

    /**
     * Get initiatorusername
     *
     * @return string 
     */
    public function getInitiatorusername()
    {
        return $this->initiatorusername;
    }

    /**
     * Set projectdescription
     *
     * @param string $projectdescription
     * @return Project
     */
    public function setProjectdescription($projectdescription)
    {
        $this->projectdescription = $projectdescription;

        return $this;
    }

    /**
     * Get projectdescription
     *
     * @return string 
     */
    public function getProjectdescription()
    {
        return $this->projectdescription;
    }

    /**
     * Set goalamount
     *
     * @param integer $goalamount
     * @return Project
     */
    public function setGoalamount($goalamount)
    {
        $this->goalamount = $goalamount;

        return $this;
    }

    /**
     * Get goalamount
     *
     * @return integer 
     */
    public function getGoalamount()
    {
        return $this->goalamount;
    }

    /**
     * Set curentamount
     *
     * @param integer $curentamount
     * @return Project
     */
    public function setCurentamount($curentamount)
    {
        $this->curentamount = $curentamount;

        return $this;
    }

    /**
     * Get curentamount
     *
     * @return integer 
     */
    public function getCurentamount()
    {
        return $this->curentamount;
    }

    /**
     * Set startdate
     *
     * @param \DateTime $startdate
     * @return Project
     */
    public function setStartdate($startdate)
    {
        $this->startdate = $startdate;

        return $this;
    }

    /**
     * Get startdate
     *
     * @return \DateTime 
     */
    public function getStartdate()
    {
        return $this->startdate;
    }

    /**
     * Set finishdate
     *
     * @param \DateTime $finishdate
     * @return Project
     */
    public function setFinishdate($finishdate)
    {
        $this->finishdate = $finishdate;

        return $this;
    }

    /**
     * Get finishdate
     *
     * @return \DateTime 
     */
    public function getFinishdate()
    {
        return $this->finishdate;
    }

    /**
     * Get projectid
     *
     * @return integer 
     */
    public function getProjectid()
    {
        return $this->projectid;
    }
}
