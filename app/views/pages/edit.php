<?php
class Edit extends view
{

  public function output()
  {
    $title = $this->model->title;
    $data = $this->model->data;

    require APPROOT . '/views/inc/header.php';
    $text = <<<EOT
<style>

 body {
  background: linear-gradient(89deg, #416fb6 0%, #a9deea 100%);
}
 
  .wrapper {
     max-width: 1000px;
     min-height: 650px;
     margin: 80px auto;
     padding: 40px 30px 30px 30px;
     background-color: #ecf0f3;
     border-radius: 15px;
     
     
 }

</style>
<form>

  <div class="wrapper">
     <h2><b>Edit Form</b></h2>
     
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>



 <div class="form-group">
    <label for="inputAddress">Full Name</label>
    <input type="text" class="form-control"  placeholder="enter your email"><br><br>

  <div class="form-group">
    <label for="inputAddress">Email</label>
    <input type="text" class="form-control"  placeholder="enter your email"><br><br>

  <div class="form-group">
    <label for="inputAddress">MAC Address</label>
    <input type="text" class="form-control"  placeholder="enter your email"><br><br>

   <div class="form-group">
    <label for="inputAddress">Title</label>
    <input type="text" class="form-control"  placeholder="enter your email"><br><br>

    <div class="form-group">
       

  <input style="background-color: blue; color: white;" type="submit" value="Submit"><br><br>

  


  </div>
</form>
EOT;
    echo $text;
    require APPROOT . '/views/inc/footer.php';
  }
}