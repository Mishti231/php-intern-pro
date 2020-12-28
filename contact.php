<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
    <div class="row">
       <div class="col-md-2">
       </div>

       <div class="col-md-8 col-sm-12 mt-5">
       <?php if(isset($_SESSION['msg'])): ?>
        <div class="alert alert-primary"><?= $_SESSION['msg']; ?></div>
       <?php endif; ?>
       <form method="POST" action="post.php">
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="name">Name</label>
              <input type="name" class="form-control" name="sname" placeholder="Enter your name">
            </div>
            <div class="form-group col-md-6">
              <label for="email">Email</label>
              <input type="email" class="form-control" name="email" placeholder="Enter your email">
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="mob">Mobile</label>
              <input type="number" class="form-control" name="mob" placeholder="Number">
            </div>
            <div class="form-group col-md-6">
              <label for="date">Date of birth</label>
              <input type="date" class="form-control" name="date" placeholder="Date of birth">
            </div>
          </div>
        
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="course">Course</label>
                <select  class="form-control" name="course">
                  <option selected>Choose...</option>
                  <option>CSE</option>
                  <option>IT</option>
                  <option>ECE</option>
                </select>
              </div>
              <div class="form-group col-md-6 d-flex justify-content-center align-items-center">
                  <label for="course" class="mx-5 my-0">Gender</label>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" id="inlineCheckbox1" name="gender" value="male">
                    <label class="form-check-label" for="inlineCheckbox1">Male</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" id="inlineCheckbox2"  name="gender" value="female">
                    <label class="form-check-label" for="inlineCheckbox2">Female</label>
                  </div>
              </div>
            </div>
            
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="address" >Address</label>
                <textarea class=" form-control" rows="3" placeholder="Address" name="address"></textarea>
              </div>
              <div class="form-group col-md-6">
                <label for="address" >Additional details</label>
                <textarea class=" form-control" rows="3" placeholder="Address" name="additional_details"></textarea>
              </div>
            </div>
    
            <div class="col-md-4">
               <button type="submit" class="btn btn-primary" name="submit">Submit</button>
               </div>




        </form>
       </div>

       <div class="col-md-2">
       </div>

    </div>
    </div>
    
</body>
</html>