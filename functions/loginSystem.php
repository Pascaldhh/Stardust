<?php
class LN
{
    public $username;
    public $password;
    public $msg;
    
    public function __construct()
    {
        if(isset($_POST['name']) && !empty($_POST['name']))
        {
            $this->username = $_POST['name'];
        }
        if(isset($_POST['password']) && !empty($_POST['password']))
        {
            $this->password = $_POST['password'];
        }
    }
    public function validation()
    {
        if($_POST['submit'])
        {
            if(empty($this->username))
            {
                return; 
            }
        }
    }
    public function returnMessage()
    {
        return $this->msg;
    }
}