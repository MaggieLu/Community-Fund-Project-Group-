<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Community
 *
 * @ORM\Table(name="Community")
 * @ORM\Entity
 */
class Community
{
    /**
     * @var string
     *
     * @ORM\Column(name="communityCategory", type="string", length=45, nullable=false)
     */
    private $communitycategory;

    /**
     * @var string
     *
     * @ORM\Column(name="communityDescription", type="string", length=200, nullable=false)
     */
    private $communitydescription;

    /**
     * @var string
     *
     * @ORM\Column(name="communityName", type="string", length=45)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $communityname;



    /**
     * Set communitycategory
     *
     * @param string $communitycategory
     * @return Community
     */
    public function setCommunitycategory($communitycategory)
    {
        $this->communitycategory = $communitycategory;

        return $this;
    }

    /**
     * Get communitycategory
     *
     * @return string 
     */
    public function getCommunitycategory()
    {
        return $this->communitycategory;
    }

    /**
     * Set communitydescription
     *
     * @param string $communitydescription
     * @return Community
     */
    public function setCommunitydescription($communitydescription)
    {
        $this->communitydescription = $communitydescription;

        return $this;
    }

    /**
     * Get communitydescription
     *
     * @return string 
     */
    public function getCommunitydescription()
    {
        return $this->communitydescription;
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
     * Set communityname
     *
     * @param string $communityname
     * @return Community
     */
    public function setCommunityname($communityname)
    {
        $this->communityname = $communityname;

        return $this;
    }

    public function findAllOrderedByCommunityName()
    {
        return $this->getEntityManager()
            ->createQuery(
                'SELECT c FROM AppBundle:Community c ORDER BY c.communityName ASC'
            )
            ->getResult();
    }
}
