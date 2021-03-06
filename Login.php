<?php
class Login extends view
{
  public function output()
  {
    $title = $this->model->title;

    require APPROOT . '/views/inc/header.php';
    flash('register_success');
    $text = <<<EOT
    <div class="jumbotron jumbotron-fluid">
    <div class="container">
      <h1 class="display-4"> $title</h1>
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
    $registerUrl = URLROOT . 'users/register';

    $text = <<<EOT
    <div class="row">
    <div class="col-md-6 mx-auto">
    <div class="card card-body bg-light mt-5">
    <h2>Sign Up</h2>
    <form action="$action" method="post">
EOT;

    echo $text;
    // $this->printEmail();
    // $this->printPassword();

    $text = <<<EOT
    
<style>

 
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');


* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
   font-family: 'Poppins', sans-serif
}

body {
  
 background-image: url("imgg.jpg");
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

.logo {
    width: 80px;
    margin-bottom: 30px;
  margin-left:100px;
  
}

.logo img {
    width: 100%;
    height: 80px;
    object-fit: cover;
    border-radius: 50%;
    box-shadow: 0px 0px 3px #5f5f5f, 0px 0px 0px 5px #ecf0f3, 8px 8px 15px #a7aaa7, -8px -8px 15px #fff
  
}

.wrapper .name {
    font-weight: 600;
    font-size: 1rem;
    letter-spacing: 1.3px;
    padding-left: 10px;
    color: #555
  margin-top: 30px;
}

.wrapper .form-field input {
    width: 100%;
    display: block;
    border: none;
    outline: none;
    background: none;
    font-size: 1.2rem;
    color: #666;
    padding: 10px 15px 10px 10px
}

.wrapper .form-field {
    padding-left: 10px;
    margin-bottom: 20px;
    border-radius: 20px;
    box-shadow: inset 8px 8px 8px #cbced1, inset -8px -8px 8px #fff
}

.wrapper .btn {
    box-shadow: none;
    width: 100%;
    height: 40px;
    background-color: red;
    color: #fff;
    border-radius: 25px;
    box-shadow: 3px 3px 3px #b1b1b1, -3px -3px 3px #fff;
    letter-spacing: 1.3px
}

.wrapper .btn:hover {
    background-color: red;
}

.wrapper a {
    text-decoration: none;
    font-size: 0.8rem;
    color: red;
}

.wrapper a:hover {
    color: red;
}


}
</style>
<div class="wrapper">
   <div class="logo"> <img src="logo.jpg" alt=""> </div>
   <center> <div class="text-center mt-4 name"> Al-Wastani </div> </center>
   <form class="p-3 mt-3">
       <div class="form-field d-flex align-items-center"> <span class="far fa-user"></span> <input type="text" name="userName" id="userName" placeholder="Email"> </div>
       <div class="form-field d-flex align-items-center"> <span class="fas fa-key"></span> <input type="password" name="password" id="pwd" placeholder="Password"> </div> <button class="btn mt-3">Login</button>
   </form>
   <div class="text-center fs-6"> <a href="#">Forget password?</a> </div>
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
