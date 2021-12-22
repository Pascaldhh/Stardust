<?php
class LN
{
    public $db;
    public $email;
    public $password;
    public $msg;
    
    public function __construct()
    {
        $this->db = new DB();
        if(isset($_POST['email']) && !empty($_POST['email']))
        {
            $this->email = $_POST['email'];
        }
        if(isset($_POST['password']) && !empty($_POST['password']))
        {
            $this->password = $_POST['password'];
        }
        var_dump($this->email);
    }
    public function validation()
    {
        if(isset($_POST['submit']))
        {
            if(empty($this->email) || empty($this->password))
            {
                return $this->msg = 'Be sure to full in all fields.'; 
            }

            $pass_verify = password_verify($this->password, PASSWORD_DEFAULT);
            $where = sprintf("email_address='%s'", $this->email);

            $query = $this->db->Read('users', '*', $where);
            if($query && password_verify($this->password, $query[0]['password']))
            {
                $_SESSION['logged-in'] = true;
                $_SESSION['email'] = $this->email;
                $_SESSION['role'] = $query[0]['role'];
                $_SESSION['user_info'] = $query[0];

                header('Location: /'.$_GET['lang'].'/');
                exit();
            } else {
                return $this->msg = 'One or more fields are incorrect';
            }
        }
    }
}