<?php
class ReportsModel extends model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function GetAllUsers()
    {
        $this->dbh->query('SELECT * from users');
        $userRecord = $this->dbh->resultSet();
        return $userRecord;
    }
}
