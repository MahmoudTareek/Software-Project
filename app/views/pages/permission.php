<?php
class Permission extends view
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
     min-height: 800px;
     margin: 80px auto;
     padding: 40px 30px 30px 30px;
     background-color: #ecf0f3;
     border-radius: 15px;
    
     
 }
</style>
<form>

  <div class="wrapper">
     <h2><b>Leave Application Form</b></h2>
     <h6>Please fillout leave application to notify  your managers.</h6>
     <h6>Leave form displaying in Africa/Cairo time</h6>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <div class="alert alert-warning">
    <strong>Warning!</strong> Number of excuses Allowed: 4 hours per month <br><br>Number of Annual leaves Allowed : 21 Days <br><br> Incident Days : 7 Days
    </div>

    <h4>Duration of leave:</h4>

  <div class="form-row">
    <div class="form-group col-md-6">

      <label for="inputEmail4">From</label>
      <input type="date" class="form-control" placeholder="26 Mar 2022, 10:00 PM">
      <input type="time" class="form-control" placeholder="26 Mar 2022, 11:00 PM">





    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">To</label>
      <input type="date" class="form-control" placeholder="26 Mar 2022, 11:00 PM">
      <input type="time" class="form-control" placeholder="26 Mar 2022, 11:00 PM">
    </div>
  </div>

  <h6>Please ensure your email id is autofilled, if not please login again:</h6>

  <div class="form-group">
    <label for="inputAddress">Email</label>
    <input type="text" class="form-control"  placeholder="enter your email"><br><br>

     <div class="form-group">
      <label for="inputState">Type</label>
      <select id="inputState" class="form-control">
        <option selected>Choose...</option>
        <option>Excuse</option>
        <option>Day off</option>
        <option>Mission</option>
      </select>
    </div>



   <div class="form-group">
      <label for="inputState">Reasons for Leave</label>
      <select id="inputState" class="form-control">
        <option selected>Choose...</option>
        <option>Family emergency</option>
        <option>Not feeling well</option>
        <option>Mission to the company</option>
      </select>
    </div>

    <div class="form-group">
    <label  for="inputAddress">Any Additional Notes:</label>
    <input style="height: 70px;" type="text" class="form-control"  placeholder="comment"><br><br>

    <div class="form-group">
       <input type="checkbox"  name="name1" value="name">
  <label for="name1">Confirm leave application and cancel all classes during the period.</label><br><br>

  <input style="background-color: blue; color: white;" type="submit" value="Submit"><br><br>

    <div class="alert alert-warning">
    <strong>Warning!</strong> If you exceed the number of leaves available penalty will be Added.


  </div>
 <div class="alert alert-info">
    <strong>Info!</strong> Missions to the company are not counted from your available excuses.

  </div>

</form>
EOT;
    echo $text;
    require APPROOT . '/views/inc/footer.php';
  }
}
