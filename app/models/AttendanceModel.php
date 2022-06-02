<?php

class AttendanceModel extends model
{
    public  $title = 'Add Attendance';
   
    protected $checkin;
    protected $checkout;
    protected $datee;
    protected $id;
    protected $mac;
    protected $hourss;

    public function __construct()
    {
        parent::__construct();
        $this->checkin = date("Y-m-d h:i:s a");
        $this->checkout = date("Y-m-d h:i:s a");
        $this->datee = date("Y-m-d");
        $this->id = $_SESSION['user_id'];
        $this->hourss = " ";
        $this->mac = exec('getmac');
        $this->mac = strtok($this->mac, ' ');
    }

    public function Checkin()
    {
        $this->dbh->query("INSERT INTO timesheet (id,MAC,Date1,Checkin) VALUES (:ID, :Mac, :Datee, :Checkin)");
        $this->dbh->bind(':ID', $this->id);
        $this->dbh->bind(':Mac', $this->mac);
        $this->dbh->bind(':Checkin', $this->checkin);
        $this->dbh->bind(':Datee', $this->datee);
        return $this->dbh->execute();
    }
    public function Checkout()
    {
        $this->dbh->query("UPDATE timesheet set Checkout = :Checkout WHERE id = :ID AND Date1 = :Datee");
        $this->dbh->bind(':ID', $this->id);
        $this->dbh->bind(':Datee', $this->datee);
        $this->dbh->bind(':Checkout', $this->checkout);
        return $this->dbh->execute();
    }
    public function WorkingHours()
    {
        $this->dbh->query("SELECT Checkin, Checkout from timesheet WHERE id = :ID");
        $this->dbh->bind(':ID', $this->id);
        $record = $this->dbh->single();
        $this->hourss = ((strtotime($record->Checkout) - strtotime ($record->Checkin))/3600);
        $this->dbh->query("INSERT INTO timesheet Hours1 VALUES (:hourss) WHERE id = :ID");
        $this->dbh->bind(':ID', $this->id);
        $this->dbh->bind(':hourss', $this->hourss);
        return $this->dbh->execute();
    }
}
