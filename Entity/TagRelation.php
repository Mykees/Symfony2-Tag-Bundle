<?php

namespace Mykees\TagBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TagRelation
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Mykees\TagBundle\Repository\TagRelationRepository")
 */
class TagRelation
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="model", type="string", length=80)
     */
    private $model;

    /**
     * @var integer
     *
     * @ORM\Column(name="model_id", type="integer")
     */
    private $modelId;

    /**
     * @ORM\ManyToOne(targetEntity="Mykees\TagBundle\Entity\Tag",inversedBy="tagRelation")
     */
    private $tag;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set model
     *
     * @param string $model
     * @return TagRelation
     */
    public function setModel($model)
    {
        $this->model = $model;

        return $this;
    }

    /**
     * Get model
     *
     * @return string 
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * Set modelId
     *
     * @param integer $modelId
     * @return TagRelation
     */
    public function setModelId($modelId)
    {
        $this->modelId = $modelId;

        return $this;
    }

    /**
     * Get modelId
     *
     * @return integer 
     */
    public function getModelId()
    {
        return $this->modelId;
    }

    /**
     * Set tag
     *
     * @param \Mykees\TagBundle\Entity\Tag $tag
     * @return TagRelation
     */
    public function setTag(\Mykees\TagBundle\Entity\Tag $tag = null)
    {
        $this->tag = $tag;

        return $this;
    }

    /**
     * Get tag
     *
     * @return \Mykees\TagBundle\Entity\Tag 
     */
    public function getTag()
    {
        return $this->tag;
    }
}
