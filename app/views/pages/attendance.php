<?php
class Attendance extends view
{

  public function output()
  {
    $title = $this->model->title;

    require APPROOT . '/views/inc/header.php';
    $action = URLROOT . 'pages/attendance';
    $name = $_SESSION['user_name'];
    $mac = $_SESSION['user_mac'];
    $text = <<<EOT
    <style>
    .wrapper {
  max-width:1000;
  min-height: 300px;
  margin: 80px auto;
  padding: 40px 30px 30px 30px;
  background-color: #ecf0f3;
  border-radius: 15px;
}
body {
  background: linear-gradient(89deg, #416fb6 0%, #a9deea 100%);
  background-size: cover;
}
.button3 {
  background-color: #f44336;
  margin-left: 150px;
  font-size: 20px;
  border-radius: 12px;
  color: white;
   border: none;
   margin-top: 40px;
        } 
.button2 {background-color: green;
margin-left: 300px;
font-size: 20px;
border-radius: 12px;
color: white;
border: none;
margin-top: 40px;
}
</style>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<div class="container">
  <div class="wrapper">
<center><h2>-Attendance-</h2></center>
<form action="$action" method="post">
<div class="form-group">
    <label for="MAC">MAC Address:</label>
    <input type="text" class="form-control" value="$mac" readonly>
  </div>
  <div class="form-group">
    <label for="Name">Name:</label>
    <input type="text" class="form-control" value="$name" readonly>
  </div>
  <button type="submit" name="add_button" value="Add" class=" button2">check in</button>
  <button type="submit" name="update_button" value="Update" class=" button3">check out</button>
</form> 
</div>
</div>
EOT;
    echo $text;
    require APPROOT . '/views/inc/footer.php';
  }
}
