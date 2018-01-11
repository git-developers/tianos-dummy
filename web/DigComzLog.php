<?php

namespace App\Bundle\CmsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * DigComzLog
 *
 * @ORM\Table(name="dig_comz_log", indexes={@ORM\Index(name="fk_dig_comz_log_dig_comz_campaign1_idx", columns={"dig_comz_campaign_id"}), @ORM\Index(name="fk_dig_comz_log_dig_comz_config1_idx", columns={"dig_comz_config_id"})})
 * @ORM\Entity
 */
class DigComzLog
{

    const ACTION_CREATED = 'created';
    const ACTION_UPDATED = 'updated';
    const ACTION_DELETED = 'deleted';


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
     * @ORM\Column(name="client", type="string", length=200, nullable=true)
     */
    private $client;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="start_date", type="datetime", nullable=true)
     */
    private $startDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="end_date", type="datetime", nullable=true)
     */
    private $endDate;

    /**
     * @var string
     *
     * @ORM\Column(name="html", type="text", nullable=true)
     */
    private $html;

    /**
     * @var string
     *
     * @ORM\Column(name="action", type="string", length=45, nullable=true)
     */
    private $action;

    /**
     * @var integer
     *
     * @ORM\Column(name="created_by_user", type="integer", nullable=true)
     */
    private $createdByUser;

    /**
     * @var integer
     *
     * @ORM\Column(name="updated_by_user", type="integer", nullable=true)
     */
    private $updatedByUser;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=true)
     */
    private $createdAt;

    /**
     * @var \App\Bundle\CmsBundle\Entity\DigComzCampaign
     *
     * @ORM\ManyToOne(targetEntity="App\Bundle\CmsBundle\Entity\DigComzCampaign")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="dig_comz_campaign_id", referencedColumnName="id_increment")
     * })
     */
    private $digComzCampaign;

    /**
     * @var \App\Bundle\CmsBundle\Entity\DigComzConfig
     *
     * @ORM\ManyToOne(targetEntity="App\Bundle\CmsBundle\Entity\DigComzConfig")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="dig_comz_config_id", referencedColumnName="id_increment")
     * })
     */
    private $digComzConfig;



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
     * Set client
     *
     * @param string $client
     *
     * @return DigComzLog
     */
    public function setClient($client)
    {
        $this->client = $client;

        return $this;
    }

    /**
     * Get client
     *
     * @return string
     */
    public function getClient()
    {
        return $this->client;
    }

    /**
     * Set startDate
     *
     * @param \DateTime $startDate
     *
     * @return DigComzLog
     */
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;

        return $this;
    }

    /**
     * Get startDate
     *
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * Set endDate
     *
     * @param \DateTime $endDate
     *
     * @return DigComzLog
     */
    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;

        return $this;
    }

    /**
     * Get endDate
     *
     * @return \DateTime
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * Set html
     *
     * @param string $html
     *
     * @return DigComzLog
     */
    public function setHtml($html)
    {
        $this->html = $html;

        return $this;
    }

    /**
     * Get html
     *
     * @return string
     */
    public function getHtml()
    {
        return $this->html;
    }

    /**
     * Set action
     *
     * @param string $action
     *
     * @return DigComzLog
     */
    public function setAction($action)
    {
        $this->action = $action;

        return $this;
    }

    /**
     * Get action
     *
     * @return string
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * Set createdByUser
     *
     * @param integer $createdByUser
     *
     * @return DigComzLog
     */
    public function setCreatedByUser($createdByUser)
    {
        $this->createdByUser = $createdByUser;

        return $this;
    }

    /**
     * Get createdByUser
     *
     * @return integer
     */
    public function getCreatedByUser()
    {
        return $this->createdByUser;
    }

    /**
     * Set updatedByUser
     *
     * @param integer $updatedByUser
     *
     * @return DigComzLog
     */
    public function setUpdatedByUser($updatedByUser)
    {
        $this->updatedByUser = $updatedByUser;

        return $this;
    }

    /**
     * Get updatedByUser
     *
     * @return integer
     */
    public function getUpdatedByUser()
    {
        return $this->updatedByUser;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return DigComzLog
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set digComzCampaign
     *
     * @param \App\Bundle\CmsBundle\Entity\DigComzCampaign $digComzCampaign
     *
     * @return DigComzLog
     */
    public function setDigComzCampaign(\App\Bundle\CmsBundle\Entity\DigComzCampaign $digComzCampaign = null)
    {
        $this->digComzCampaign = $digComzCampaign;

        return $this;
    }

    /**
     * Get digComzCampaign
     *
     * @return \App\Bundle\CmsBundle\Entity\DigComzCampaign
     */
    public function getDigComzCampaign()
    {
        return $this->digComzCampaign;
    }

    /**
     * Set digComzConfig
     *
     * @param \App\Bundle\CmsBundle\Entity\DigComzConfig $digComzConfig
     *
     * @return DigComzLog
     */
    public function setDigComzConfig(\App\Bundle\CmsBundle\Entity\DigComzConfig $digComzConfig = null)
    {
        $this->digComzConfig = $digComzConfig;

        return $this;
    }

    /**
     * Get digComzConfig
     *
     * @return \App\Bundle\CmsBundle\Entity\DigComzConfig
     */
    public function getDigComzConfig()
    {
        return $this->digComzConfig;
    }
}
