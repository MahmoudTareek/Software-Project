<html>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<style>
table {
  border-collapse: collapse;
  width: 100%;
}
th, td {
  text-align: left;
  padding: 8px;
}
tr:nth-child(even){background-color: #f2f2f2}
th {
  background-color: black;
  color: white;
}
.wrapper {
    max-width: 1200px;
    min-height: 500px;
    margin: 80px auto;
    padding: 40px 30px 30px 30px;
    background-color: white;
    border-radius: 15px;
    box-shadow: 5px 5px 5px 5px lightgrey;
    
}
.button{
  box-shadow:none;
}
</style>
<?php
class HR extends view
{

  public function output()
  {
   

    require APPROOT . '/views/inc/header.php';
    $theHR=$this->model->HR();

?>

<div class="container">
          <div class="wrapper">

            

            <?php $str= "<table width=100%>
                  <thead>
                      <tr>
                          <th>MacAddress</th>
                          <th>Email</th>
                          <th>Type</th>
                          <th>Reason</th>
                          <th style='text-align: center;'>Action</th>

                      </tr>
                  </thead>";

                        foreach($theHR as $x){
                        
                          $str.="<tr><td>".$x->MAC."</td><td>".$x->Email."</td><td>".$x->Type."</td><td>".$x->Reason."</td><td><button style='width:3cm; box-shadow:none;margin-left: 100px;' type='button' class='btn btn-primary'>Accept</button><button style='background-color: red;width:3cm; box-shadow:none;margin-left: 10px;'type='button' class='btn btn-danger'>Decline</button></td></tr>";


                            }

    
          $str.="</table>";

    echo $str;
    require APPROOT . '/views/inc/footer.php';
  }
}