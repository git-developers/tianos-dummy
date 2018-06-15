<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Bet
 *
 * @ORM\Table(name="bet", uniqueConstraints={@ORM\UniqueConstraint(name="UNIQ_D044D5D4A76ED395", columns={"user_id"})})
 * @ORM\Entity
 */
class Bet
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_increment", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idIncrement;

    /**
     * @var string
     *
     * @ORM\Column(name="matchKey", type="string", length=45, nullable=true)
     */
    private $matchkey;

    /**
     * @var string
     *
     * @ORM\Column(name="team_home", type="string", length=45, nullable=true)
     */
    private $teamHome;

    /**
     * @var string
     *
     * @ORM\Column(name="team_away", type="string", length=45, nullable=true)
     */
    private $teamAway;

    /**
     * @var integer
     *
     * @ORM\Column(name="team_home_score", type="integer", nullable=true)
     */
    private $teamHomeScore;

    /**
     * @var integer
     *
     * @ORM\Column(name="team_away_score", type="integer", nullable=true)
     */
    private $teamAwayScore;

    /**
     * @var string
     *
     * @ORM\Column(name="token", type="string", length=45, nullable=true)
     */
    private $token;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created", type="datetime", nullable=false)
     */
    private $created;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated", type="datetime", nullable=true)
     */
    private $updated;

    /**
     * @var boolean
     *
     * @ORM\Column(name="active", type="boolean", nullable=false)
     */
    private $active;

    /**
     * @var \AppBundle\Entity\User
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     * })
     */
    private $user;



    /**
     * Get idIncrement
     *
     * @return integer
     */
    public function getIdIncrement()
    {
        return $this->idIncrement;
    }

    /**
     * Set matchkey
     *
     * @param string $matchkey
     *
     * @return Bet
     */
    public function setMatchkey($matchkey)
    {
        $this->matchkey = $matchkey;

        return $this;
    }

    /**
     * Get matchkey
     *
     * @return string
     */
    public function getMatchkey()
    {
        return $this->matchkey;
    }

    /**
     * Set teamHome
     *
     * @param string $teamHome
     *
     * @return Bet
     */
    public function setTeamHome($teamHome)
    {
        $this->teamHome = $teamHome;

        return $this;
    }

    /**
     * Get teamHome
     *
     * @return string
     */
    public function getTeamHome()
    {
        return $this->teamHome;
    }

    /**
     * Set teamAway
     *
     * @param string $teamAway
     *
     * @return Bet
     */
    public function setTeamAway($teamAway)
    {
        $this->teamAway = $teamAway;

        return $this;
    }

    /**
     * Get teamAway
     *
     * @return string
     */
    public function getTeamAway()
    {
        return $this->teamAway;
    }

    /**
     * Set teamHomeScore
     *
     * @param integer $teamHomeScore
     *
     * @return Bet
     */
    public function setTeamHomeScore($teamHomeScore)
    {
        $this->teamHomeScore = $teamHomeScore;

        return $this;
    }

    /**
     * Get teamHomeScore
     *
     * @return integer
     */
    public function getTeamHomeScore()
    {
        return $this->teamHomeScore;
    }

    /**
     * Set teamAwayScore
     *
     * @param integer $teamAwayScore
     *
     * @return Bet
     */
    public function setTeamAwayScore($teamAwayScore)
    {
        $this->teamAwayScore = $teamAwayScore;

        return $this;
    }

    /**
     * Get teamAwayScore
     *
     * @return integer
     */
    public function getTeamAwayScore()
    {
        return $this->teamAwayScore;
    }

    /**
     * Set token
     *
     * @param string $token
     *
     * @return Bet
     */
    public function setToken($token)
    {
        $this->token = $token;

        return $this;
    }

    /**
     * Get token
     *
     * @return string
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     *
     * @return Bet
     */
    public function setCreated($created)
    {
        $this->created = $created;

        return $this;
    }

    /**
     * Get created
     *
     * @return \DateTime
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Set updated
     *
     * @param \DateTime $updated
     *
     * @return Bet
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;

        return $this;
    }

    /**
     * Get updated
     *
     * @return \DateTime
     */
    public function getUpdated()
    {
        return $this->updated;
    }

    /**
     * Set active
     *
     * @param boolean $active
     *
     * @return Bet
     */
    public function setActive($active)
    {
        $this->active = $active;

        return $this;
    }

    /**
     * Get active
     *
     * @return boolean
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * Set user
     *
     * @param \AppBundle\Entity\User $user
     *
     * @return Bet
     */
    public function setUser(\AppBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \AppBundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }
}
