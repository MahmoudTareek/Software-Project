<?php
class AddUser extends view
{

  public function output()
  {
    $title = $this->model->title;
    $data = $this->model->data;

    require APPROOT . '/views/inc/header.php';
    $text = <<<EOT
    <style>
    .wrapper {
  max-width:1000;
  min-height: 300px;
  margin: 80px auto;
  padding: 40px 30px 30px 30px;
  background-color: #ecf0f3;
  border-radius: 15px;
  box-shadow: 13px 13px 20px #cbced1, -13px -13px 20px #fff;    
}
body {
background-image: url("images/imgg.jpg");
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
.button2 {
background-color: green;
margin-left: 500px;
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
<center><h2>-Add User-</h2></center>
<form>
  <div class="form-group">
    <label for="text">MAC Address:</label>
    <input type="text" class="form-control" id="MacAddress" placeholder="Enter the Mac Address">
  </div>
  <div class="form-group">
    <label for="text">First Name:</label>
    <input type="text" class="form-control" id="FirstName" placeholder="Enter the first name">
  </div>
  <div class="form-group">
    <label for="text">Last Name:</label>
    <input type="text" class="form-control" id="LastName" placeholder="Enter the last name">
  </div>
  <div class="form-group">
    <label for="email">Email:</label>
    <input type="email" class="form-control" id="Email" placeholder="Enter the email">
  </div>
  <div class="form-group">
    <label for="Password">Password:</label>
    <input type="password" class="form-control" id="Password" placeholder="Enter the password">
  </div>
  <div class="form-group">
    <label for="pwd">First Name:</label>
    <input type="password" class="form-control" id="pwd" placeholder="Enter the first name">
  </div>
  <button type="submit" class=" button2">Add</button>
</form> 
</div>
</div>
EOT;
    echo $text;
    require APPROOT . '/views/inc/footer.php';
  }
}
