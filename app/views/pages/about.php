
<?php
class About extends view
{

  public function output()
  {
    $title = $this->model->title;
    $data = $this->model->data;

    require APPROOT . '/views/inc/header.php';
    $text = <<<EOT

<style>



.padding {

  padding: 100px;
  margin-left: -400px;

}

.card {
    border-radius: 40px;
    -webkit-box-shadow: 0 1px 20px 0 rgba(69, 90, 100, 0.08);
    box-shadow: 0 1px 20px 0 rgba(69, 90, 150, 0.08);
    border: none;
    margin-bottom: 60px;
    margin-top: 20px;
    width: 200%;
    height: 500px;
}

.m-r-0 {
    margin-right: 0px;


}

.m-l-0 {
    margin-left: 0px;

}

.user-card-full .user-profile {
    border-radius: 5px 0 0 5px
}

.bg-c-lite-green {
      background-size: cover;
      background-image: url('images/caa242dee3a86cc05fd167427572d472.jpg');
      border-radius: 30px 30px 0px 0px;
      background-repeat: no-repeat;
      height: 40%;
}

.user-profile {
    padding: 20px 0
}

.card-block {
    padding: 1.25rem

}

.m-b-25 {
    margin-bottom: 25px
}

.img-radius {
    border-radius: 15px;
}

h6 {
    font-size: 30px
}

.card .card-block p {
    line-height: 40px
}

@media only screen and (min-width: 1400px) {
    p {
        font-size: 20px
    }
}

.card-block {
    padding: 1.25rem
}

.b-b-default {
    border-bottom: 1px solid #e0e0e0
}

.m-b-20 {
    margin-bottom: 20px

    
}

.p-b-5 {
    padding-bottom: 5px !important
}

.card .card-block p {
    line-height: 25px;
}

.m-b-10 {

    margin-bottom: 10px;
}

.text-muted {
    color: #919aa3 !important
}

.b-b-default {
    border-bottom: 1px solid #e0e0e0
}

.f-w-600 {
   
   
}

.m-b-20 {
    margin-bottom: 20px
}

.m-t-40 {
    margin-top: 20px;

}

.p-b-5 {
    padding-bottom: 5px !important

}

.m-b-10 {
    
    margin-bottom: 20px;
    margin-right:100px:

}

.m-t-40 {
    margin-top: 20px;
    color: red;

}




</style>
    <div class="page-content page-container" id="page-content">
    <div class="padding">
        <div class="row container d-flex justify-content-center">
            <div class="col-xl-6 col-md-12">
                <div class="card ">
                    <div class="row m-l-0 ">
                        <div class="col-sm-4 bg-c-lite-green user-profile">
                            <div class="card-block text-center text-white">
                                <div class="m-b-25"> <img src="https://img.icons8.com/bubbles/100/000000/user.png" class="img-radius" alt="User-Profile-Image"> </div>
                                <h6 style="color:black;" class="f-w-600">Nour Ahmed</h6>
                                <p style="color:black;">Web Designer</p> <i class=" mdi mdi-square-edit-outline feather icon-edit m-t-10 f-16 "></i>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="card-block">
                                <h6 class="m-b-20 p-b-5 b-b-default f-w-600">Information</h6>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <h6 class="m-b-10 f-w-600">Email</h6>
                                        <p class="text-muted f-w-400">NOUR@gmail.com</p>
                                    </div>
                                    <div class="col-sm-6">
                                        <h6 class="m-b-10 f-w-600">Phone</h6>
                                        <p class="text-muted f-w-400">01002459850</p>
                                    </div>
                                </div>
                               
                                <div class="row">
                                    <div class="col-sm-6">
                                        <h6 class="m-b-10 f-w-600">MAC Address</h6>
                                        <p class="text-muted f-w-400">0214456456</p>
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
}
