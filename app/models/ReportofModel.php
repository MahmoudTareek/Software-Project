<?php
require_once 'AdminModel.php';
class ReportofModel extends Model
{

    public function __construct()
    {
        parent::__construct();

    }

       public function report()
     {
         $this->dbh->query("SELECT timesheet.Date1, timesheet.Checkin, timesheet.Checkout, timesheet.Hours1, users.name FROM timesheet, users WHERE users.id = '56'");
        $report = $this->dbh->resultSet();
        return $report;    
         }
}