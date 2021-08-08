<?php


if(isset($_POST['submit'])){
                   
                    $fname = $_POST['fname'];
                    $lname = $_POST['lname'];
                    $email = $_POST['email'];
                    $phone = $_POST['phone'];
                    $birth = $_POST['date'];
                    $job = $_POST['job'];
                    $pass = $_POST['pwd'];
                    $confirmPass = $_POST['confirmPwd'];
                    // echo $birth;
                    // echo $fname.$lname.$email.$phone.$data.$job.$pass.$confirmPass;

if(!empty($fname && $lname && $email && $phone && $birth && $job && $pass && $confirmPass)){
                    function Validate($formData){
                                  $formData = trim($formData);
                                  $formData = stripslashes($formData);
                                  $formData = htmlspecialchars($formData);   
                            return $formData;
                    }
                   $fname =  Validate($fname);
                   $lname=  Validate($lname);
                  $email =   Validate($email);
                   $phone =  Validate($phone);
                   $birth =  Validate($birth);
                    $job = Validate($job);
                    $pass = Validate($pass);
                    $phone = "+88".$phone;
                   $confirmPass= Validate($confirmPass);
                   if($pass === $confirmPass){
                        include "config.php";
                                       $confirmPass = md5($confirmPass);
                                       $sql = "INSERT INTO form (fname,lname,email,phone,birth,job,ConPass) VALUES('$fname','$lname','$email','$phone','$birth','$job','$confirmPass')";
 $query = mysqli_query($conn,$sql);
 if($query){
                  
                     header("Location:http://localhost/works/singupwithmysql/index.php?done='done'");
                    
                     echo "Something fucking";
 }

                   }else{
                                       echo "Password should Confirm";
                   }




}else{
      header("Location:http://localhost/works/singupwithmysql/index.php?form='reauired'");
}



                  

}

















?>