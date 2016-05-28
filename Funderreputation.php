<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Funderreputation
 *
 * @ORM\Table(name="FunderReputation")
 * @ORM\Entity
 */
class Funderreputation
{
    /**
     * @var string
     *
     * @ORM\Column(name="funderUserName", type="string", length=45, nullable=false)
     */
    private $funderusername;

    /**
     * @var string
     *
     * @ORM\Column(name="raterUserName", type="string", length=45, nullable=false)
     */
    private $raterusername;

    /**
     * @var string
     *
     * @ORM\Column(name="rating", type="string", length=45, nullable=false)
     */
    private $rating;

    /**
     * @var string
     *
     * @ORM\Column(name="ratingDescription", type="string", length=200, nullable=true)
     */
    private $ratingdescription;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ratedDate", type="datetime", nullable=false)
     */
    private $rateddate;

    /**
     * @var integer
     *
     * @ORM\Column(name="frID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $frid;



    /**
     * Set funderusername
     *
     * @param string $funderusername
     * @return Funderreputation
     */
    public function setFunderusername($funderusername)
    {
        $this->funderusername = $funderusername;

        return $this;
    }

    /**
     * Get funderusername
     *
     * @return string 
     */
    public function getFunderusername()
    {
        return $this->funderusername;
    }

    /**
     * Set raterusername
     *
     * @param string $raterusername
     * @return Funderreputation
     */
    public function setRaterusername($raterusername)
    {
        $this->raterusername = $raterusername;

        return $this;
    }

    /**
     * Get raterusername
     *
     * @return string 
     */
    public function getRaterusername()
    {
        return $this->raterusername;
    }

    /**
     * Set rating
     *
     * @param string $rating
     * @return Funderreputation
     */
    public function setRating($rating)
    {
        $this->rating = $rating;

        return $this;
    }

    /**
     * Get rating
     *
     * @return string 
     */
    public function getRating()
    {
        return $this->rating;
    }

    /**
     * Set ratingdescription
     *
     * @param string $ratingdescription
     * @return Funderreputation
     */
    public function setRatingdescription($ratingdescription)
    {
        $this->ratingdescription = $ratingdescription;

        return $this;
    }

    /**
     * Get ratingdescription
     *
     * @return string 
     */
    public function getRatingdescription()
    {
        return $this->ratingdescription;
    }

    /**
     * Set rateddate
     *
     * @param \DateTime $rateddate
     * @return Funderreputation
     */
    public function setRateddate($rateddate)
    {
        $this->rateddate = $rateddate;

        return $this;
    }

    /**
     * Get rateddate
     *
     * @return \DateTime 
     */
    public function getRateddate()
    {
        return $this->rateddate;
    }

    /**
     * Get frid
     *
     * @return integer 
     */
    public function getFrid()
    {
        return $this->frid;
    }
}
