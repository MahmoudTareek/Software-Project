
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
  background-color: lightblue;
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
</style>
<?php
class Admin extends view
{

  public function output()
  {
   

    require APPROOT . '/views/inc/header.php';
    $employees=$this->model->employee();

?>

<div class="container">
          <div class="wrapper">
            

            <?php $str= "<table width=100%>
                  <thead>
                      <tr>
                          <th>MACAddress</th>
                          <th>Name</th>
                          <th>Title</th>
                          <th>Phone</th>
                          <th>Action</th>

                      </tr>
                  </thead>";

                        foreach($employees as $x){
                        
                          $str.="<tr><td>".$x->MAC."</td><td>".$x->name."</td><td>".$x->Title."</td><td>".$x->phone."</td><td><button style= 'background-color: transparent; border:none;'><a href='http://localhost/mvc/public/pages/edit' style ='color: #ffc107';class='edit' title='Edit' data-toggle='tooltip'><i class='material-icons'>&#xE254;</i></a></button><button style= 'background-color: transparent; border:none;''><a style ='color: red;'' class='delete' title='Delete' data-toggle='tooltip'><i class='material-icons'>&#xE872;</i></a> </center></button></td></tr>";


                            }

    
          $str.="</table>";

    echo $str;
    require APPROOT . '/views/inc/footer.php';
  }
}
