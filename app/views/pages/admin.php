<?php
class admin extends view
{

  public function output()
  {
   

    require APPROOT . '/views/inc/header.php';
    $text = <<<EOT


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



<body>
<div class="wrapper">
  <div><p style="font-size: 30px;">Employee <b>Details</b></p></div>
<table>
  <tr>
    <th>Full Name</th>
     <th>MAC Address</th>  
     <th>Email</th>
    <th>Title</th>
    <th><center>Actions</center></th>

  </tr>
  <tr>
    <td>Nour</td>
    <td>43553545</td>
    <td>No@gmail.com</td>
    <td>IT Manager</td>
    <td><center>
    <button style= "background-color: transparent; border:none;"><a style ="color: #ffc107";class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a></button>
    <button style= "background-color: transparent; border:none;"><a style ="color: red;" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a></button>
    </td></center>
  </tr>
  <tr>
    <td>Nesma</td>
    <td>23346554</td>
    <td>n@gmail.com</td>
    <td>Back End developer</td>
    <td><center>
    <button style= "background-color: transparent; border:none;"><a style ="color: #ffc107";class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a></button>
    <button style= "background-color: transparent; border:none;"><a style ="color: red;" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a></button>
    </td></center>
  </tr>
  <tr>
     <td>Yasmine</td>
    <td>7864435</td>
    <td>p@gmail.com</td>
    <td>Front End Developer</td>
    <td><center> 
      <button style= "background-color: transparent; border:none;"><a style ="color: #ffc107";class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a></button>
       <button style= "background-color: transparent; border:none;"><a style ="color: red;" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a> </center></td> </button>
  </tr>
  <tr>
     <td>Mahmoud</td>
    <td>53465354</td>
    <td>p@gmail.com</td>
    <td>web designer</td>
    <td><center>
                           
    <button style= "background-color: transparent; border:none;"><a style ="color: #ffc107"; class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a></button>
    <button style= "background-color: transparent; border:none;"><a style ="color: red;" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a></button>
    </td></center>
</tr>

</table>

 <button type="button" class="btn btn-info add-new"><i class="fa fa-plus"></i> Add New</button>

</div>

</body>
</html>

EOT;
    echo $text;
    require APPROOT . '/views/inc/footer.php';
  }
}
