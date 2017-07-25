<?php

namespace AppBundle\Entity;

/**
 * Car
 */
class Car
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $plateNumber;

    /**
     * @var string
     */
    private $brand;

    /**
     * @var string
     */
    private $model;

    /**
     * @var int
     */
    private $year;

    /**
     * @var string
     */
    private $color;

    /**
     * @var string
     */
    private $type;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set plateNumber
     *
     * @param string $plateNumber
     *
     * @return Car
     */
    public function setPlateNumber($plateNumber)
    {
        $this->plateNumber = $plateNumber;

        return $this;
    }

    /**
     * Get plateNumber
     *
     * @return string
     */
    public function getPlateNumber()
    {
        return $this->plateNumber;
    }

    /**
     * Set brand
     *
     * @param string $brand
     *
     * @return Car
     */
    public function setBrand($brand)
    {
        $this->brand = $brand;

        return $this;
    }

    /**
     * Get brand
     *
     * @return string
     */
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * Set model
     *
     * @param string $model
     *
     * @return Car
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
     * Set year
     *
     * @param integer $year
     *
     * @return Car
     */
    public function setYear($year)
    {
        $this->year = $year;

        return $this;
    }

    /**
     * Get year
     *
     * @return int
     */
    public function getYear()
    {
        return $this->year;
    }

    /**
     * Set color
     *
     * @param string $color
     *
     * @return Car
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
     * Set type
     *
     * @param string $type
     *
     * @return Car
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }
    
    private $car_service;

   
}
