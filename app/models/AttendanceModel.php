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
        $this->checkin = date("h:i:s a");
        $this->checkout = date("h:i:s a");
        $this->datee = date("Y-m-d");
        $this->id = $_SESSION['user_id'];
        $this->hourss = " ";
        $this->mac = exec('getmac');
        $this->mac = strtok($this->mac, ' ');
    }

    public function Checkin()
    {
        $this->dbh->query("INSERT INTO timesheet (id,MAC,Date1,Checkin,Showed) VALUES (:ID, :Mac, :Datee, :Checkin, '1')");
        $this->dbh->bind(':ID', $this->id);
        $this->dbh->bind(':Mac', $this->mac);
        $this->dbh->bind(':Checkin', $this->checkin);
        $this->dbh->bind(':Datee', $this->datee);
        return $this->dbh->execute();
    }
    public function Checkout()
    {
        $this->dbh->query("UPDATE timesheet set Checkout = :Checkout WHERE id = :ID AND Date1 = :Datee AND Showed = '1'");
        $this->dbh->bind(':ID', $this->id);
        $this->dbh->bind(':Datee', $this->datee);
        $this->dbh->bind(':Checkout', $this->checkout);
        return $this->dbh->execute();

    }
    public function WorkingHours()
    {
        $this->dbh->query("SELECT * from timesheet WHERE id = :ID AND Date1 = :Datee AND Showed = '1'");
        $this->dbh->bind(':ID', $this->id);
        $this->dbh->bind(':Datee', $this->datee);
        $record = $this->dbh->single();
        // $this->hourss = abs(strtotime($record->Checkout) - strtotime($record->Checkin))/60/60;
        $this->hourss = abs(strtotime($record->Checkout) - strtotime($record->Checkin));
        $this->hourss = floor($this->hourss * 10) / 10;
        $this->dbh->query("UPDATE timesheet set Hours1 = :hourss WHERE id = :ID AND Date1 = :Datee AND Showed = '1'");
        $this->dbh->bind(':hourss', $this->hourss);
        $this->dbh->bind(':ID', $this->id);
        $this->dbh->bind(':Datee', $this->datee);
        return $this->dbh->execute();
    }
    public function Showed(){
        $this->dbh->query("UPDATE timesheet set Showed = 0");
        return $this->dbh->execute();
    }
    public function Report()
    {
        $this->dbh->query("SELECT * from timesheet WHERE id = :ID");
        $this->dbh->bind(':ID', $this->id);
        $record = $this->dbh->resultSet();
        return $record;
}
}
