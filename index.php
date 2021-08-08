<?php










?>


<!DOCTYPE html>
<html lang="en">
<head>
                    <meta charset="UTF-8">
                    <meta http-equiv="X-UA-Compatible" content="IE=edge">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <title>Document</title>
 <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
<link rel="stylesheet" href="./assets/css/style.css">
</head>
<body>
         
<div class="container">
<div class="d-flex vh-100">
  <div class="d-flex w-100 justify-content-center align-self-center">
  
  <form action="action.php" method="post">
  <div class="form-row">
  <?php
    
    
    
    if($_GET['done']){
  
      echo "<div class='alert col-12 alert-success' role='alert'>
     SingUP  successfully
    </div>";
   
    // header("Location:http://localhost/works/singupwithmysql/index.php");
   
    // }
    }
    if($_GET['form']){
      echo "<div class='alert col-12 alert-danger' role='alert'>
    Fill Should Complete!
    </div>";
    
    }
    

    
    
    
    
    
    
    
    ?>
    <div class="col-md-6">
    <label for="fname">First Name:</label>
      <input type="text" name="fname" class="form-control" placeholder="First name">
    </div>
    <div class="col-md-6">
    <label for="lname">Last Name:</label>
      <input type="text" name="lname" class="form-control" placeholder="Last name">
    </div>
    <div class="col-md-6">
    <label for="email">Email:</label>
                        <input  class="form-control" name="email" type="email" placeholder="Enter Your Valid Email Adress" name="" id="">
    </div>
    <div class="col-md-6">
    <label for="phone">Phone:</label>
           <input class="form-control" name="phone" placeholder="Enter Your Phone Number" type="number">             
    </div>
    <div class="col-md-6">
                        
<label for="BirthDay">BirthDay:</label>
<input  name="date" class="form-control" type="date" >
</div>
<div class="col-md-6">
<label for="tilte">Job Title:</label>
<input class="form-control" name="job" placeholder="Job" type="text">
</div>

<div class="col-md-6">
<label for="password">Password:</label>
<input class="form-control" name="pwd" placeholder="Password" type="password">
</div>
<div class="col-md-6">
<label for="password">Confirm Password:</label>
<input class="form-control" name="confirmPwd" placeholder="Confirm Password" type="password">
</div>
<div class="col-md-6">
<input class="form-control bg-warning" name="reset" type="reset" value="Reset">
</div>
<div class="col-md-6">
<input class="form-control  bg-success" name="submit" type="submit" value="SUBMIT">
</div>

                        






  </div>
</form>
  </div>
</div>             
</div>

</body>
</html>