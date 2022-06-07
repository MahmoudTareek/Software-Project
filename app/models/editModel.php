<?php
require_once 'AdminModel.php';
class EditModel extends Model
{
    public  $title = 'User Edit Page';
    protected $name;
    protected $Title;
    protected $email;
   


    public function __construct()
    {
        parent::__construct();
        $this->name = '';
       
        $this->Title= '';
      $this->email= '';
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
      public function getemail()
    {
        return $this->email;
    }

    public function setemail($email)
    {
        $this->email = $email;
    }

  

       public function Edit($id)
     {
         $this->dbh->query("UPDATE `users` SET `name` = :name,  `email` = :email, `Title` = :Title WHERE `users`.`id` = ".$id);
         $this->dbh->bind(':name', $this->name);
         $this->dbh->bind(':Title', $this->Title);
        $this->dbh->bind(':email', $this->email);
        $workRecord = $this->dbh->execute();
        return $workRecord;    
         }
}
