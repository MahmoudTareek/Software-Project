<?php
class Register extends view
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
  background: -webkit-linear-gradient(89deg, #416fb6 0%, #a9deea 100%);
  background-size: cover;
}
.button3 {
  background-color: #f44336;
  margin-left: 150px;
  font-size: 20px;
  border-radius: 30px;
  color: white;
   border: none;
   margin-top: 40px;
        } 
.button2 {
background-color: green;
margin-left: 500px;
font-size: 20px;
border-radius: 30px;
color: white;
border: none;
margin-top: 40px;
}
</style>
<script>
function adduservalidation(){

  var passw = document.getElementById("password").value;
  var passw2 = document.getElementById("confirm_password").value;
  var mail = document.getElementById("email").value;

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


EOT;
    echo $text;
    $this->printForm();
    require APPROOT . '/views/inc/footer.php';
  }

  private function printForm()
  {
    $action = URLROOT . 'users/register';
    $loginUrl = URLROOT . 'users/login';

    $text = <<<EOT
    <div class="row">
    <div class="wrapper">
    
    <h2>Sign Up</h2>
    <form action="$action" method="post">
EOT;
    echo $text;
    $this->printName();
    $this->printTitle();
    $this->printphone();
    $this->printEmail();
    $this->printPassword();
    $this->printConfirmPassword();
    $text = <<<EOT

    <div class="container">
      <div class="row mt-4">
        <div class="col">
          <input type="submit" value="Register" class="form-control btn btn-lg btn-primary btn-block">
        </div>
        <div class="col">
          <a href="$loginUrl" style="font-size:25px;">Current user, login here</a>
        </div>
      </div>
      </div>
    </form>
    </div>
    </div>
    </div>
EOT;
    echo $text;
  }

  private function printName()
  {
    $val = $this->model->getName();
    $err = $this->model->getNameErr();
    $valid = (!empty($err) ? 'is-invalid' : '');

    $this->printInput('text', 'name', $val, $err, $valid);
  }
   private function printTitle()
  {
    $val = $this->model->getTitle();
    $err = $this->model->getTitleErr();
    $valid = (!empty($err) ? 'is-invalid' : '');

    $this->printInput('Title', 'Title', $val, $err, $valid);
  }
   private function printphone()
  {
    $val = $this->model->getphone();
    $err = $this->model->getphoneErr();
    $valid = (!empty($err) ? 'is-invalid' : '');

    $this->printInput('phone', 'phone', $val, $err, $valid);
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
  private function printConfirmPassword()
  {
    $val = $this->model->getConfirmPassword();
    $err = $this->model->getConfirmPasswordErr();
    $valid = (!empty($err) ? 'is-invalid' : '');

    $this->printInput('password', 'confirm_password', $val, $err, $valid);
  }

  private function printInput($type, $fieldName, $val, $err, $valid)
  {
    $label = str_replace("_", " ", $fieldName);
    $label = ucwords($label);
    $text = <<<EOT
    <div class="form-group">
      <label for="$fieldName"> $label: <sup>*</sup></label>
      <input type="$type" name="$fieldName" class="form-control form-control-lg $valid" id="$fieldName" value="$val">
      <span class="invalid-feedback">$err</span>
    </div>
EOT;
    echo $text;
  }
}
