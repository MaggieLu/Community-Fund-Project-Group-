<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Securitytoken
 *
 * @ORM\Table(name="SecurityToken")
 * @ORM\Entity
 */
class Securitytoken
{
    /**
     * @var string
     *
     * @ORM\Column(name="answer", type="string", length=100, nullable=false)
     */
    private $answer;

    /**
     * @var string
     *
     * @ORM\Column(name="question", type="string", length=100)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $question;

    /**
     * @var string
     *
     * @ORM\Column(name="userName", type="string", length=45)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $username;



    /**
     * Set answer
     *
     * @param string $answer
     * @return Securitytoken
     */
    public function setAnswer($answer)
    {
        $this->answer = $answer;

        return $this;
    }

    /**
     * Get answer
     *
     * @return string 
     */
    public function getAnswer()
    {
        return $this->answer;
    }

    /**
     * Set question
     *
     * @param string $question
     * @return Securitytoken
     */
    public function setQuestion($question)
    {
        $this->question = $question;

        return $this;
    }

    /**
     * Get question
     *
     * @return string 
     */
    public function getQuestion()
    {
        return $this->question;
    }

    /**
     * Set username
     *
     * @param string $username
     * @return Securitytoken
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
}
