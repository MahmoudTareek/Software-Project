<?php
class HRModel extends model
{ 
    protected $mac;
    protected $email;
    protected $type;
    protected $reason;
    protected $maxexits;
    protected $fromDate;
    protected $fromTime;
    protected $toDate;
    protected $toTime;

   public function __construct()
    {
        parent::__construct();
  
        $this->email = "";
        $this->type = "";
        $this->reason = "";
        $this->maxexits = "";
        $this->fromDate = "";
        $this->fromTime = "";

      $this->toDate = "";
      $this->toTime = "";
  }

    public function getemail()
    {
        return $this->email;
    }

    public function setemail($email)
    {
        $this->email = $email;
    }
       public function settype($type)
    {
        $this->type = $type;
    }
      public function gettype()
    {
        return $this->type;
    }

    public function setreason($reason)
    {
        $this->reason = $reason;
    }
          public function getreason()
    {
        return $this->reason;
    }
      public function getmaxexits()
    {
        return $this->maxexits;
    }

    public function setmaxexits($maxexits)
    {
        $this->maxexits = $maxexits;
    }

    public function getfromDate()
    {
        return $this->fromDate;
    }

    public function setfromDate($fromDate)
    {
        $this->fromDate = $fromDate;
    }
     public function getfromTime()
    {
        return $this->fromTime;
    }

    public function setfromTime($fromTime)
    {
        $this->fromTime = $fromTime;
    }
     public function gettoDate()
    {
        return $this->toDate;
    }
    public function settoDate($toDate)
    {
        $this->toDate = $toDate;
    }

         public function gettoTime()
    {
        return $this->toTime;
    }
    public function settoTime($toTime)
    {
        $this->toTime = $toTime;
    }
    public function findUserByEmail($email)
    {
        $this->dbh->query('select * from permission where email= :email');
        $this->dbh->bind(':email', $email);

        $userRecord = $this->dbh->single();
        return $this->dbh->rowCount();
    }

    public function emailExist($email)
    {
        return $this->findUserByEmail($email) > 0;
    }
     public function HR()
    {

          $this->dbh->query("SELECT * FROM permission");
          $this->dbh->execute();
          $result = $this->dbh->resultSet();
           return $result;
        
    }
}
