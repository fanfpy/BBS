<?php
/**
 * Created by PhpStorm.
 * User: fanfpy
 * Date: 2017/11/16
 * Time: 20:43
 */

class contents
{
    private $ID;
    private $user_id;
    private $classification;
    private $title;
    private $contents_str;
    private $img;
    private $hits;
    private $date;

    public function __construct($ID,$user_id,$classification,$title,$contents_str,$img,$hits,$date)
    {
        $this->ID=$ID;
        $this->user_id=$user_id;
        $this->classification=$classification;
        $this->title=$title;
        $this->contents_str=$contents_str;
        $this->img=$img;
        $this->hits= $hits;
        $this->date=$date;
    }

    /**
     * @param mixed $classification
     */
    public function setClassification($classification)
    {
        $this->classification = $classification;
    }

    /**
     * @param mixed $contents_str
     */
    public function setContentsStr($contents_str)
    {
        $this->contents_str = $contents_str;
    }

    /**
     * @param mixed $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }

    /**
     * @param mixed $hits
     */
    public function setHits($hits)
    {
        $this->hits = $hits;
    }

    /**
     * @param mixed $ID
     */
    public function setID($ID)
    {
        $this->ID = $ID;
    }

    /**
     * @param mixed $img
     */
    public function setImg($img)
    {
        $this->img = $img;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @param mixed $user_id
     */
    public function setUserId($user_id)
    {
        $this->user_id = $user_id;
    }

    /**
     * @return mixed
     */
    public function getClassification()
    {
        return $this->classification;
    }

    /**
     * @return mixed
     */
    public function getContentsStr()
    {
        return $this->contents_str;
    }

    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @return mixed
     */
    public function getHits()
    {
        return $this->hits;
    }

    /**
     * @return mixed
     */
    public function getID()
    {
        return $this->ID;
    }

    /**
     * @return mixed
     */
    public function getImg()
    {
        return $this->img;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @return mixed
     */
    public function getUserId()
    {
        return $this->user_id;
    }
}