<?php
class PermissionModel extends model
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

        $this->mac = exec('getmac');
        $this->mac = strtok($this->mac, ' ');
    
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

public function Add()
    {
    $this->dbh->query("INSERT INTO permission (`MAC`, `Email`,`Type`,`Reason`, `Maxexits`, `FromDate`, `FromTime`, `ToDate`, `ToTime`) VALUES(:MAC, :Email,:Type ,:Reason, :Maxexits, :FromDate, :FromTime, :ToDate, :ToTime)");
        $this->dbh->bind(':MAC', $this->mac);
        $this->dbh->bind(':Email', $this->email);
        $this->dbh->bind(':Type', $this->type);
        $this->dbh->bind(':Reason', $this->reason);
        $this->dbh->bind(':Maxexits', $this->maxexits);
        $this->dbh->bind(':FromDate', $this->fromDate);
        $this->dbh->bind(':FromTime', $this->fromTime);
        $this->dbh->bind(':ToDate', $this->toDate);
        $this->dbh->bind(':ToTime', $this->toTime);

        return $this->dbh->execute();
    }
}
