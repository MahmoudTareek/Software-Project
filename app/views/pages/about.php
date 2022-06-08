<?php
class About extends view
{

  public function output()
  {
    $title = $this->model->title;
    $data = $this->model->data;
    $namee = $_SESSION['user_name'];
    $mac = $_SESSION['user_mac'];
    $email = $_SESSION['user_email'];
    $phone = $_SESSION['user_phone'];
    $title = $_SESSION['user_title'];
    require APPROOT . '/views/inc/header.php';
    if($_SESSION['user_id']){
    $text = <<<EOT
  <link rel="stylesheet" href="http://localhost/MVC/public/css/style.css">
<style>


    body{
    background: -webkit-linear-gradient(89deg, #416fb6 0%, #a9deea 100%);
        
}


</style>
    <div class="page-content page-container" id="page-content">
    <div class="padding">
        <div class="row container d-flex justify-content-center">
            <div class="col-xl-6 col-md-12">
                <div class="card ">
                    <div class="row m-l-0 m-r-0">
                        <div class="col-sm-4 bg-c-lite-green user-profile">
                            <div class="card-block text-center text-white">
                                <div class="m-b-25"> <img src="https://img.icons8.com/bubbles/100/000000/user.png" class="img-radius" alt="User-Profile-Image"> </div>
                                <h6 class="f-w-600" style= "color:black; ">$namee</h6>
                                <p style ="color:black;">$title</p> <i class=" mdi mdi-square-edit-outline feather icon-edit m-t-10 f-16 "></i>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="card-block">
                                <h6 class="m-b-20 p-b-5 b-b-default f-w-600">Information</h6>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <h6 class="m-b-10 f-w-600">Email</h6>
                                        <p class="text-muted f-w-400">$email</p>
                                    </div>
                                    <div class="col-sm-6">
                                        <h6 class="m-b-10 f-w-600">Phone</h6>
                                        <p class="text-muted f-w-400">$phone</p>
                                    </div>
                                </div>
                               
                                <div class="row">
                                    <div class="col-sm-6">
                                        <h6 class="m-b-10 f-w-600">MAC Address</h6>
                                        <p class="text-muted f-w-400">$mac</p>
                                    </div>
                                    
                                </div>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
EOT;
    echo $text;
    require APPROOT . '/views/inc/footer.php';
  }
  else{
    header('location: ' . URLROOT . 'users/login');
  }
}
}
