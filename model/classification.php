<?php
/**
 * Created by PhpStorm.
 * User: fanfpy
 * Date: 2017/11/16
 * Time: 21:10
 */

class classification
{
    private $id;
    private $ClassificationName;

    public function __construct($id,$ClassificationName)
    {
        $this->id=$id;
        $this->ClassificationName=$ClassificationName;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @param mixed $ClassificationName
     */
    public function setClassificationName($ClassificationName)
    {
        $this->ClassificationName = $ClassificationName;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getClassificationName()
    {
        return $this->ClassificationName;
    }
}