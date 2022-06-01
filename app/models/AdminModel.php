<?php
class AdminModel extends model
{
    protected $email;
    protected $name;
    protected $title1;
    protected $macaddress;

    public function __construct()
    {
        parent::__construct();
        $this->email    = '';
        $this->name = '';

        $this->title1    = '';
        $this->macaddress = '';
    }

    public function getEmail()
    {
        return $this->email;
    }
    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getname()
    {
        return $this->name;
    }
    public function setname($name)
    {
        $this->name = $name;
    }
     public function gettitle1()
    {
        return $this->title1;
    }
    public function settitle1($title1)
    {
        $this->title1 = $title1;
    }

    public function getmacaddress()
    {
        return $this->macaddress;
    }
    public function setmacaddress($macaddress)
    {
        $this->macaddress = $macaddress;
    }

    public function findUserByEmail($email)
    {
        $this->dbh->query('select * from users where email= :email');
        $this->dbh->bind(':email', $email);

        $userRecord = $this->dbh->single();
        return $this->dbh->rowCount();
    }

    public function emailExist($email)
    {
        return $this->findUserByEmail($email) > 0;
    }
     public function employee()
    {

          $this->dbh->query("SELECT * FROM users");
          $this->dbh->execute();
          $result = $this->dbh->resultSet();
           return $result;
        
    }
}
