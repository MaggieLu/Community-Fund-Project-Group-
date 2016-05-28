<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Initiatorreputation
 *
 * @ORM\Table(name="InitiatorReputation")
 * @ORM\Entity
 */
class Initiatorreputation
{
    /**
     * @var string
     *
     * @ORM\Column(name="initiatorUserName", type="string", length=45, nullable=false)
     */
    private $initiatorusername;

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
     * @ORM\Column(name="irID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $irid;



    /**
     * Set initiatorusername
     *
     * @param string $initiatorusername
     * @return Initiatorreputation
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
     * Set raterusername
     *
     * @param string $raterusername
     * @return Initiatorreputation
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
     * @return Initiatorreputation
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
     * @return Initiatorreputation
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
     * @return Initiatorreputation
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
     * Get irid
     *
     * @return integer 
     */
    public function getIrid()
    {
        return $this->irid;
    }
}
