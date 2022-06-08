  <link rel="stylesheet" href="http://localhost/MVC/public/css/style.css">
<style>
body{
    background: -webkit-linear-gradient(89deg, #416fb6 0%, #a9deea 100%);
}
.contact-form{
    background: #fff;
    margin-top: 10%;
    margin-bottom: 5%;
    width: 70%;
}
.contact-form .form-control{
    border-radius:1rem;
}
.contact-image{
    text-align: center;
    height:30px;
    weight:30px
}
.contact-image img{
    border-radius: 50px;
    width: 115px;
    height:100px;
    margin-top: -3%;
   
}
.contact-form form{
    padding: 14%;
}
.contact-form form .row{
    margin-bottom: -7%;
}
.contact-form h3{
    margin-bottom: 8%;
    margin-top: -10%;
    text-align: center;
    color: #0062cc;
}
.contact-form .btnContact {
    width: 50%;
    border: none;
    border-radius: 1rem;
    padding: 1.5%;
    background: #0062cc;
    font-weight: 600;
    color: #fff;
    cursor: pointer;
}
.btnContactSubmit
{
    width: 50%;
    border-radius: 1rem;
    padding: 1.5%;
    color: #fff;
    background-color: #0062cc;
    border: none;
    cursor: pointer;
}
</style>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
function loadDoc() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("demo").innerHTML =
      this.responseText;
    
    }
  };
  xhttp.open("GET", "http://localhost/MVC/public/AJAX/ajax_info.txt", true);
  xhttp.send();
}
</script>


<?php
class Contact extends view
{

  public function output()
  {
    $action=URLROOT.'pages/Contact';
    

    require APPROOT .'/views/inc/header.php';
    $text = <<<EOT
  
<div class="container contact-form">
            <div class="contact-image">
                <img src="http://localhost/mvc/public/images/logo.jpg" alt="rocket_contact"/>
            </div>
            <form action="$action"method="post">
                <h3> Any Concerns?</h3>
               <center> <p> Please fill the information bellow</p> </center>
               <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" placeholder="Your Name *" value="" />

                        </div>
                        <div class="form-group">
                            <input type="text" name="email" class="form-control" placeholder="Your Email *" value="" />
                        </div>
                        <div class="form-group">
                            <input type="text" name="phone" class="form-control" placeholder="Your Phone Number *" value="" />
                        </div>
                        <div class="form-group"> <div id="demo">
                          

<button type="submit"onclick="loadDoc()" class="submit-btn">Send Message</button>
</div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <textarea name="Message" class="form-control" placeholder="Your Message *" style="width: 100%; height: 150px;"></textarea>
                        </div>
                    </div>
                </div>
            </form>
            
          
</div>
EOT;
    echo $text;
    require APPROOT . '/views/inc/footer.php';
  }
}#onclick="loadDoc()"