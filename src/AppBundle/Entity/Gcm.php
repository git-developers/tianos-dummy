<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Gcm
 *
 * @ORM\Table(name="gcm", uniqueConstraints={@ORM\UniqueConstraint(name="UNIQ_CF0A2136A76ED395", columns={"user_id"})})
 * @ORM\Entity
 */
class Gcm
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
     * @ORM\Column(name="click_action", type="string", length=45, nullable=true)
     */
    private $clickAction;

    /**
     * @var string
     *
     * @ORM\Column(name="icon", type="string", length=45, nullable=true)
     */
    private $icon;

    /**
     * @var string
     *
     * @ORM\Column(name="color", type="string", length=45, nullable=true)
     */
    private $color;

    /**
     * @var string
     *
     * @ORM\Column(name="sound", type="string", length=45, nullable=true)
     */
    private $sound;

    /**
     * @var string
     *
     * @ORM\Column(name="badge", type="string", length=45, nullable=true)
     */
    private $badge;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=45, nullable=true)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="body", type="text", length=65535, nullable=true)
     */
    private $body;

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
     * @var \AppBundle\Entity\UserTianos
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\UserTianos")
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
     * Set clickAction
     *
     * @param string $clickAction
     *
     * @return Gcm
     */
    public function setClickAction($clickAction)
    {
        $this->clickAction = $clickAction;

        return $this;
    }

    /**
     * Get clickAction
     *
     * @return string
     */
    public function getClickAction()
    {
        return $this->clickAction;
    }

    /**
     * Set icon
     *
     * @param string $icon
     *
     * @return Gcm
     */
    public function setIcon($icon)
    {
        $this->icon = $icon;

        return $this;
    }

    /**
     * Get icon
     *
     * @return string
     */
    public function getIcon()
    {
        return $this->icon;
    }

    /**
     * Set color
     *
     * @param string $color
     *
     * @return Gcm
     */
    public function setColor($color)
    {
        $this->color = $color;

        return $this;
    }

    /**
     * Get color
     *
     * @return string
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Set sound
     *
     * @param string $sound
     *
     * @return Gcm
     */
    public function setSound($sound)
    {
        $this->sound = $sound;

        return $this;
    }

    /**
     * Get sound
     *
     * @return string
     */
    public function getSound()
    {
        return $this->sound;
    }

    /**
     * Set badge
     *
     * @param string $badge
     *
     * @return Gcm
     */
    public function setBadge($badge)
    {
        $this->badge = $badge;

        return $this;
    }

    /**
     * Get badge
     *
     * @return string
     */
    public function getBadge()
    {
        return $this->badge;
    }

    /**
     * Set title
     *
     * @param string $title
     *
     * @return Gcm
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set body
     *
     * @param string $body
     *
     * @return Gcm
     */
    public function setBody($body)
    {
        $this->body = $body;

        return $this;
    }

    /**
     * Get body
     *
     * @return string
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     *
     * @return Gcm
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
     * @return Gcm
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
     * @return Gcm
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
     * @param \AppBundle\Entity\UserTianos $user
     *
     * @return Gcm
     */
    public function setUser(\AppBundle\Entity\UserTianos $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \AppBundle\Entity\UserTianos
     */
    public function getUser()
    {
        return $this->user;
    }
}
