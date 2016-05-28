<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Milestone
 *
 * @ORM\Table(name="Milestone")
 * @ORM\Entity
 */
class Milestone
{
    /**
     * @var string
     *
     * @ORM\Column(name="milestoneName", type="string", length=45, nullable=false)
     */
    private $milestonename;

    /**
     * @var string
     *
     * @ORM\Column(name="projectName", type="string", length=45, nullable=false)
     */
    private $projectname;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=45, nullable=true)
     */
    private $description;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dueDate", type="datetime", nullable=true)
     */
    private $duedate;

    /**
     * @var integer
     *
     * @ORM\Column(name="amount", type="integer", nullable=true)
     */
    private $amount;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=45, nullable=true)
     */
    private $type;

    /**
     * @var integer
     *
     * @ORM\Column(name="milestoneID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $milestoneid;



    /**
     * Set milestonename
     *
     * @param string $milestonename
     * @return Milestone
     */
    public function setMilestonename($milestonename)
    {
        $this->milestonename = $milestonename;

        return $this;
    }

    /**
     * Get milestonename
     *
     * @return string 
     */
    public function getMilestonename()
    {
        return $this->milestonename;
    }

    /**
     * Set projectname
     *
     * @param string $projectname
     * @return Milestone
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
     * Set description
     *
     * @param string $description
     * @return Milestone
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set duedate
     *
     * @param \DateTime $duedate
     * @return Milestone
     */
    public function setDuedate($duedate)
    {
        $this->duedate = $duedate;

        return $this;
    }

    /**
     * Get duedate
     *
     * @return \DateTime 
     */
    public function getDuedate()
    {
        return $this->duedate;
    }

    /**
     * Set amount
     *
     * @param integer $amount
     * @return Milestone
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * Get amount
     *
     * @return integer 
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Set type
     *
     * @param string $type
     * @return Milestone
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Get milestoneid
     *
     * @return integer 
     */
    public function getMilestoneid()
    {
        return $this->milestoneid;
    }
}
