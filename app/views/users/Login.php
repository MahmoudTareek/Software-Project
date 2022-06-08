<?php
class Login extends view
{
  public function output()
  {

    require APPROOT . '/views/inc/header.php';
    $signupUrl = URLROOT . 'users/register';
    flash('register_success');
    $text = <<<EOT
    <div class="jumbotron jumbotron-fluid">
    <div class="container">
    </div>
  </div>

  </div>
  </div>
  </div>
EOT;
    echo $text;
    $this->printForm();
    require APPROOT . '/views/inc/footer.php';
  }

  private function printForm()
  {
    $action = URLROOT . 'users/login';


    $text = <<<EOT
    <link rel="stylesheet" href="http://localhost/MVC/public/css/style.css">
   <style>

 body {
  
 background-image: url("http://localhost/mvc/public/images/360_F_322690073_C3HGQDDRUmwHrDgf28PIRtXWFeWyBaLD.jpg");
 background-size: cover;
}


.wrapper {
    max-width: 350px;
    min-height: 500px;
    margin: 80px auto;
    padding: 40px 30px 30px 30px;
    background-color: #ecf0f3;
    border-radius: 15px;

    
}

<script >
function signinvalidation(){

  var passw = document.getElementById("password").value;
  var mail = document.getElementById("email").value;

  if(passw.length < 8){
    alert("Password length must be atleast 8 characters");
    return false;
    }

    else if (!strpos(mail, '@') !== false) {
      alert("Email should contain @example.com");
      return false;
    }
}
</script>

</style>
<div class="wrapper">
   <div class="logo"> <img src="http://localhost/mvc/public/images/logo.jpg" alt=""> </div>
   <center> <div class="text-center mt-4 name"> Al-Wastani Company</div> </center>
   <form class="p-3 mt-3" method="POST">
       <div class="form-field d-flex align-items-center"> <input type="text" name="email" id="email" placeholder="Email"> </div>
       <div class="form-field d-flex align-items-center"> <input type="password" name="password" id="password" placeholder="Password"> </div>
       <button type="submit" onclick="signinvalidation()" class="btn mt-3">Login</button>
   </form>
   <div class="text-center fs-6"> <a href="#">Forget password?</a> </div>
      <div class="col">
   <a href="$signupUrl" style="margin-left:50px;font-size:20px;">New user, signup here</a>
   </div>
</div>
EOT;
    echo $text;
  }

  private function printEmail()
  {
    $val = $this->model->getEmail();
    $err = $this->model->getEmailErr();
    $valid = (!empty($err) ? 'is-invalid' : '');

    $this->printInput('email', 'email', $val, $err, $valid);
  }

  private function printPassword()
  {
    $val = $this->model->getPassword();
    $err = $this->model->getPasswordErr();
    $valid = (!empty($err) ? 'is-invalid' : '');

    $this->printInput('password', 'password', $val, $err, $valid);
  }

  private function printInput($type, $fieldName, $val, $err, $valid)
  {
    $label = str_replace("_", " ", $fieldName);
    $label = ucwords($label);
    $text = <<<EOT
    <div class="form-group">
      <label for="$fieldName"> $label: <sup>*</sup></label>
      <input type="$type" name="$fieldName" class="form-control form-control-lg $valid" id="$fieldName" value="$val" required="">
      <span class="invalid-feedback">$err</span>
    </div>
EOT;
    echo $text;
  }
}
