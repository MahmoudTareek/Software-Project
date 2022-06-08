<?php
class ContactModel extends model
{
 
    protected $name;
    protected $email;
    protected $phone;
    protected $Message;
    
  public function __construct()
    {
        parent::__construct();
  
        $this->name = "";
        $this->email = "";
        $this->phone = "";
        $this->Message = "";
        
    
    }
      public function getemail()
    {
        return $this->email;
    }

    public function setemail($email)
    {
        $this->email = $email;
    }
       public function setname($name)
    {
        $this->name = $name;
    }
      public function getname()
    {
        return $this->name;
    }

    public function setphone($phone)
    {
        $this->phone = $phone;
    }
          public function getphone()
    {
        return $this->phone;
    }
      public function getMessage()
    {
        return $this->Message;
    }

    public function setMessage($Message)
    {
        $this->Message = $Message;
    }

public function Concern()
    {
        $this->dbh->query("INSERT INTO concern (`name`, `email`,`phone`,`Message`) VALUES(:name, :email,:phone,:Message)");
        $this->dbh->bind(':email', $this->email);
        $this->dbh->bind(':name', $this->name);
        $this->dbh->bind(':phone', $this->phone);
        $this->dbh->bind(':Message', $this->Message);

        return $this->dbh->execute();
    }

}
?>
