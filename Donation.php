<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Donation
 *
 * @ORM\Table(name="Donation")
 * @ORM\Entity
 */
class Donation
{
    /**
     * @var integer
     *
     * @ORM\Column(name="amount", type="integer", nullable=true)
     */
    private $amount;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="donationDate", type="datetime", nullable=false)
     */
    private $donationdate;

    /**
     * @var integer
     *
     * @ORM\Column(name="projectID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $projectid;

    /**
     * @var string
     *
     * @ORM\Column(name="userName", type="string", length=45)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $username;

    /**
     * @var integer
     *
     * @ORM\Column(name="productID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $productid;



    /**
     * Set amount
     *
     * @param integer $amount
     * @return Donation
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
     * Set donationdate
     *
     * @param \DateTime $donationdate
     * @return Donation
     */
    public function setDonationdate($donationdate)
    {
        $this->donationdate = $donationdate;

        return $this;
    }

    /**
     * Get donationdate
     *
     * @return \DateTime 
     */
    public function getDonationdate()
    {
        return $this->donationdate;
    }

    /**
     * Set projectid
     *
     * @param integer $projectid
     * @return Donation
     */
    public function setProjectid($projectid)
    {
        $this->projectid = $projectid;

        return $this;
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

    /**
     * Set username
     *
     * @param string $username
     * @return Donation
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
     * Set productid
     *
     * @param integer $productid
     * @return Donation
     */
    public function setProductid($productid)
    {
        $this->productid = $productid;

        return $this;
    }

    /**
     * Get productid
     *
     * @return integer 
     */
    public function getProductid()
    {
        return $this->productid;
    }
}
