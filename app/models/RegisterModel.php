<?php
require_once 'UserModel.php';
class RegisterModel extends UserModel
{
    public  $title = 'User Registration Page';
    protected $name;
    protected $role;
    protected $nameErr;
    protected $confirmPassword;
    protected $confirmPasswordErr;


    public function __construct()
    {
        parent::__construct();
        $this->name     = "";
        $this->nameErr = "";
        $this->role = "";
        $this->confirmPassword = "";
        $this->confirmPasswordErr = "";
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getNameErr()
    {
        return $this->nameErr;
    }

    public function setNameErr($nameErr)
    {
        $this->nameErr = $nameErr;
    }

    public function getConfirmPassword()
    {
        return $this->confirmPassword;
    }
    public function setConfirmPassword($confirmPassword)
    {
        $this->confirmPassword = $confirmPassword;
    }

    public function getConfirmPasswordErr()
    {
        return $this->confirmPasswordErr;
    }
    public function setConfirmPasswordErr($confirmPasswordErr)
    {
        $this->confirmPasswordErr = $confirmPasswordErr;
    }

    public function signup()
    {
     $uname=$_POST['name'];
     $email=$_POST['email'];
     $pass=$_POST['password'];
     $role=$_POST['role'];

    if(strpos("$email","@admin")){
     $this->role = "1";
      }
           else if(strpos("$email","@hr")){
        $this->role = "2";
           }
 


        $this->dbh->query("INSERT INTO users (`name`, `email`, `password` , `role` ) VALUES (:uname, :email, :pass, :role)");
        $this->dbh->bind(':uname', $this->name);
        $this->dbh->bind(':email', $this->email);
        $this->dbh->bind(':pass', $this->password);
        $this->dbh->bind(':role', $this->role);

        


        return $this->dbh->execute();
    }
}
?>
