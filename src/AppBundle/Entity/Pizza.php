<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="pizza")
 */
class Pizza
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $name;

    /**
     * @ORM\Column(type="string")
     */
    private $attributes;

    /**
     * @ORM\Column(type="decimal")
     */
    private $size_30;

    /**
     * @ORM\Column(type="decimal")
     */
    private $size_40;

    /**
     * @ORM\Column(type="decimal")
     */
    private $size_50;

    /**
     * @ORM\Column(type="decimal")
     */
    private $size_60;

    /**
     * @ORM\Column(type="decimal")
     */
    private $sort;

    /**
     * @ORM\Column(type="decimal")
     */
    private $status;

    /**
     * @ORM\Column(type="decimal")
     */
    private $new;

    /**
     * @ORM\Column(type="decimal")
     */
    private $hot;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getAttributes()
    {
        return $this->attributes;
    }

    /**
     * @param mixed $attributes
     */
    public function setAttributes($attributes)
    {
        $this->attributes = $attributes;
    }

    /**
     * @return mixed
     */
    public function getSize30()
    {
        return $this->size_30;
    }

    /**
     * @param mixed $size_30
     */
    public function setSize30($size_30)
    {
        $this->size_30 = $size_30;
    }

    /**
     * @return mixed
     */
    public function getSize40()
    {
        return $this->size_40;
    }

    /**
     * @param mixed $size_40
     */
    public function setSize40($size_40)
    {
        $this->size_40 = $size_40;
    }

    /**
     * @return mixed
     */
    public function getSize50()
    {
        return $this->size_50;
    }

    /**
     * @param mixed $size_50
     */
    public function setSize50($size_50)
    {
        $this->size_50 = $size_50;
    }

    /**
     * @return mixed
     */
    public function getSize60()
    {
        return $this->size_60;
    }

    /**
     * @param mixed $size_60
     */
    public function setSize60($size_60)
    {
        $this->size_60 = $size_60;
    }

    /**
     * @return mixed
     */
    public function getSort()
    {
        return $this->sort;
    }

    /**
     * @param mixed $sort
     */
    public function setSort($sort)
    {
        $this->sort = $sort;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param mixed $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * @return mixed
     */
    public function getNew()
    {
        return $this->new;
    }

    /**
     * @param mixed $new
     */
    public function setNew($new)
    {
        $this->new = $new;
    }

    /**
     * @return mixed
     */
    public function getHot()
    {
        return $this->hot;
    }

    /**
     * @param mixed $hot
     */
    public function setHot($hot)
    {
        $this->hot = $hot;
    }
}