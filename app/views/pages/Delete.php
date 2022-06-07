<?php

class Delete extends view
{
 // echo $_GET['id'];
 // $d = new pages();
 // $d->DeleteWorker(3);
  // $this->model->DeleteWorker($_GET['id']);

  public function output()
  {

    require APPROOT . '/views/inc/navbar.php';
    
  

?>
  <div class="container">
        <div class="row">
            <div class="col-8 mx-auto">

            <div class="alert alert-danger text-center">Deleted Successfully! </div>

    </div>
    </div>
    </div>

    <?php
         require APPROOT . '/views/inc/footer.php';
    }
}
?>