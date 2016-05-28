<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Projectreputation
 *
 * @ORM\Table(name="ProjectReputation")
 * @ORM\Entity
 */
class Projectreputation
{
    /**
     * @var string
     *
     * @ORM\Column(name="projectID", type="string", length=45, nullable=false)
     */
    private $projectid;

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
     * @ORM\Column(name="ratingDescription", type="string", length=45, nullable=true)
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
     * @ORM\Column(name="prID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $prid;



    /**
     * Set projectid
     *
     * @param string $projectid
     * @return Projectreputation
     */
    public function setProjectid($projectid)
    {
        $this->projectid = $projectid;

        return $this;
    }

    /**
     * Get projectid
     *
     * @return string 
     */
    public function getProjectid()
    {
        return $this->projectid;
    }

    /**
     * Set raterusername
     *
     * @param string $raterusername
     * @return Projectreputation
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
     * @return Projectreputation
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
     * @return Projectreputation
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
     * @return Projectreputation
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
     * Get prid
     *
     * @return integer 
     */
    public function getPrid()
    {
        return $this->prid;
    }
}
