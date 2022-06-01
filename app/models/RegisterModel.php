<?php
require_once 'UserModel.php';
class RegisterModel extends UserModel
{
    public  $title = 'User Registration Page';
    protected $name;
    protected $mac;
    protected $nameErr;
    protected $phoneErr;
    protected $TitleErr;
    protected $Title;
    protected $phone;
    protected $confirmPassword;
    protected $confirmPasswordErr;
    protected $role;
   


    public function __construct()
    {
        parent::__construct();
        $this->name     = "";
        $this->nameErr = "";
        $this->TitleErr = "";
        $this->phoneErr = "";
        $this->Title = "";
        $this->phone = "";
        $this->role = "";

      

        $this->mac = exec('getmac');
        $this->mac = strtok($this->mac, ' ');
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
      public function getTitle()
    {
        return $this->Title;
    }

    public function setTitle($Title)
    {
        $this->Title = $Title;
    }
      public function getphone()
    {
        return $this->phone;
    }

    public function setphone($phone)
    {
        $this->phone = $phone;
    }

    public function getNameErr()
    {
        return $this->nameErr;
    }

    public function setNameErr($nameErr)
    {
        $this->nameErr = $nameErr;
    }
     public function getTitleErr()
    {
        return $this->TitleErr;
    }

    public function setTitleErr($TitleErr)
    {
        $this->TitleErr = $TitleErr;
    }
     public function getphoneErr()
    {
        return $this->phoneErr;
    }

    public function setphoneErr($phoneErr)
    {
        $this->phoneErr = $phoneErr;
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
        $email=$_POST['email'];

        if (strpos("$email","@admin")) {
            $this->role="1";
        }
         else if (strpos("$email","@hr")) {
            $this->role="2";
        }

        $this->dbh->query("INSERT INTO users (`MAC`, `name`,`Title`,`phone`, `email`, `password`, `role`) VALUES(:mac, :uname,:Title ,:phone, :email, :pass, :role)");
        $this->dbh->bind(':mac', $this->mac);
        $this->dbh->bind(':uname', $this->name);
        $this->dbh->bind(':email', $this->email);
        $this->dbh->bind(':pass', $this->password);
        $this->dbh->bind(':Title', $this->Title);
        $this->dbh->bind(':phone', $this->phone);
        $this->dbh->bind(':role', $this->role);
        

        return $this->dbh->execute();
    }
}
