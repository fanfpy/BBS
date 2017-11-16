<?php
/**
 * Created by PhpStorm.
 * User: fanfpy
 * Date: 2017/11/16
 * Time: 21:03
 */

class comment
{
    private $id;
    private $user_id;
    private $contents_id;
    private $comment_str;
    private $date;

    function __construct($id,$user_id,$contents_id,$comment_str,$date){
        $this->id=$id;
        $this->user_id=$user_id;
        $this->contents_id=$contents_id;
        $this->comment_str=$comment_str;
        $this->date=$date;
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
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getCommentStr()
    {
        return $this->comment_str;
    }

    /**
     * @return mixed
     */
    public function getContentsId()
    {
        return $this->contents_id;
    }

    /**
     * @return mixed
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * @param mixed $user_id
     */
    public function setUserId($user_id)
    {
        $this->user_id = $user_id;
    }

    /**
     * @param mixed $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @param mixed $comment_str
     */
    public function setCommentStr($comment_str)
    {
        $this->comment_str = $comment_str;
    }

    /**
     * @param mixed $contents_id
     */
    public function setContentsId($contents_id)
    {
        $this->contents_id = $contents_id;
    }
}