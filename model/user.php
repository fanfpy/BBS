<?php
/**
 * Created by PhpStorm.
 * User: fanfpy
 * Date: 2017/11/16
 * Time: 20:38
 */

class user
{
    private $id;
    private $UserName;
    private $UserPasswd;
    private $nickname;
    private $UserJiBie;
    private $usertouxiang;
    private $user_date;


    function __construct($id,$UserName,$UserPasswd,$nickname,$UserJiBie,$usertouxiang,$user_date)
    {
        $this->id=$id;
        $this->UserName=$UserName;
        $this->UserPasswd=$UserPasswd;
        $this->nickname= $nickname;
        $this->UserJiBie= $UserJiBie;
        $this->usertouxiang= $usertouxiang;
        $this->user_date= $user_date;
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
    public function getNickname()
    {
        return $this->nickname;
    }

    /**
     * @return mixed
     */
    public function getUserDate()
    {
        return $this->user_date;
    }

    /**
     * @return mixed
     */
    public function getUserJiBie()
    {
        return $this->UserJiBie;
    }

    /**
     * @return mixed
     */
    public function getUserName()
    {
        return $this->UserName;
    }

    /**
     * @return mixed
     */
    public function getUserPasswd()
    {
        return $this->UserPasswd;
    }

    /**
     * @return mixed
     */
    public function getUserTouxiang()
    {
        return $this->usertouxiang;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @param mixed $nickname
     */
    public function setNickname($nickname)
    {
        $this->nickname = $nickname;
    }

    /**
     * @param mixed $user_date
     */
    public function setUserDate($user_date)
    {
        $this->user_date = $user_date;
    }

    /**
     * @param mixed $UserJiBie
     */
    public function setUserJiBie($UserJiBie)
    {
        $this->UserJiBie = $UserJiBie;
    }

    /**
     * @param mixed $UserName
     */
    public function setUserName($UserName)
    {
        $this->UserName = $UserName;
    }

    /**
     * @param mixed $UserPasswd
     */
    public function setUserPasswd($UserPasswd)
    {
        $this->UserPasswd = $UserPasswd;
    }

    /**
     * @param mixed $usertouxiang
     */
    public function setUsertouxiang($usertouxiang)
    {
        $this->usertouxiang = $usertouxiang;
    }
}