<?php
class AddUser extends view
{

  public function output()
  {
    $title = $this->model->title;

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
}
body {
background-image: url("http://localhost/mvc/public/images/imgg.jpg");
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


<script>
function adduservalidation(){

  var passw = document.getElementById("Password").value;
  var passw2 = document.getElementById("Password2").value;
  var mail = document.getElementById("Email").value;

  if(passw.length < 8){
    alert("Password length must be atleast 8 characters");
    return false;
    }

  if(passw2.length < 8){
    alert("Re-Password length must be atleast 8 characters");
    return false;
    }

    if(passw != passw2){
      alert("Re-Password is not correct!")
      return false;
    }
    else if (!strpos(mail, '@') !== false) {
      alert("Email should contain @example.com");
      return false;
    }
}
</script>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>


<div class="container">
<div class="wrapper">
<center><h2>-Add User-</h2></center>
<form method="post" action = "">
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
  <label for="text">MAC Address:</label>
  <input type="text" class="form-control" id="MacAddress" placeholder="Enter the Mac Address">
</div>
<div class="form-group">
    <label for="Password">Password:</label>
    <input type="password" class="form-control" id="Password" placeholder="Enter the password">
  </div>
  <div class="form-group">
    <label for="Password">Re-Password:</label>
    <input type="password" class="form-control" id="Password2" placeholder="Enter the Re-password">
  </div>
  <div class="form-group">
  <label for="Title">Title:</label>
  <input type="text" class="form-control" id="Title" placeholder="Enter the Title">
</div>
  <button type="submit" onclick="adduservalidation()" class=" button2">Add</button>
</form> 
</div>
</div>
EOT;
    echo $text;
    require APPROOT . '/views/inc/footer.php';
  }
}
