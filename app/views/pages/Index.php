<?php
class Index extends View
{
  public function output()
  {
    $title = $this->model->title;
    $subtitle = $this->model->subtitle;
    // $user_id = $_SESSION['user_id'];
    // $user_name = $_SESSION['user_name'];

    require APPROOT . '/views/inc/header.php';
    $text = <<<EOT

<style>
body{
  background-color: white;
  max-width: 100%;
  overflow-x: hidden;
}
.b{
  border-radius: 0 0 80% 80%;  
  margin-left: -200px;
  margin-top: -25px;
  width: 1720px;
  background: linear-gradient(89deg, #416fb6 0%, #a9deea 100%);
  min-width: 400px;

}
h1,h6{
  padding-top: 20px;
  color: white;
}
h1{
  padding-left: 580px;
}
h2{
  padding-left: 600px;
  color: black;
  font-weight:bold;
}
h3{
  margin-left: 330px;
  margin-top: 30px;
}
.t{
  margin-left: 860px;
  margin-top: -42px;
}
h6{
  padding-left: 770px;
}

img{
  margin-left: 320px;
  margin-top: 50px;
  width: 15%;
  border: solid white;
  border-radius: 40px;
  background-color: white;
  }
</style>
<body>
<div class="b">
<h1>WELCOME TO WASTANI GATE!</h1>
<h6>It's Easy to Save Time</h6>
<br></br>
</div>
<br></br>
<h2>SERVICES</h2>
  <a href="pages/attendance"><img src="images/attendance.png" alt="img"></a>
	<a href="pages/permission"><img src="images/permission.png" alt="img"></a>
  <h3>Attendance</h3>
  <h3 class="t">Permission</h3>
	
</body>


EOT;
    echo $text;
    require APPROOT . '/views/inc/footer.php';
  }
}
