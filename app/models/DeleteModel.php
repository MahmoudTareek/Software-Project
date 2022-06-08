<?php
require_once 'UserModel.php';
class DeleteModel extends model
{
    public  $title = 'Add New user';

    public function Delete($id)
    {
        $this->dbh->query("DELETE FROM users WHERE id=$id");

        return $this->dbh->execute();
    }
    
  


}