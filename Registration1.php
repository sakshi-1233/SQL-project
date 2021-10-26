<?php
if(isset($_POST["register_submit"]))
{
   $fname = $_POST["fname"];
   $lname = $_POST["lname"];
   $degree = $_POST["degree"];
   $branch = $_POST["branch"];
   $mob =  $_POST["mob"];
   $altmob =$_POST["altmob"];
   $pbatch =$_POST["pbatch"];
   $company =$_POST["company"];
   $workposition =$_POST["workposition"];
   $pwd =$_POST["pwd"];
   $cpwd=$_POST["cpwd"];
   $email = $_POST["email"];

  /*echo $fname.$lname.$degree.$branch.$mob.$altmob.$pbatch.$company.$workposition.$pwd.$cpwd;*/
  
   $qry= " INSERT INTO `data`(`fname`, `lname`, `degree`, `branch`, `mob`, `altmob`, `pbatch`, `company`, `workposition`,`email`, `pwd`, `cpwd`) VALUES ('$fname','$lname','$degree','$branch', '$mob','$altmob','$pbatch','$company','$workposition','$email', '$pwd', '$cpwd')";
   include("connection.php");
   mysqli_query($con,$qry);

  }
?>
<!DOCTYPE html>
<html>
<head>
    <style>
          #alumni{
            background-image:url(1.jpg);
            background-size: cover;
          }
    </style>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


	<title>Registration Form</title>

  <style>
     .demo{
      text-align:center;
     }
     .container{
      font-size:20px;
     }
  </style>
</head>
<body>


           <div class="demo"><u><font size="8px"><i>  REGISTRATION FORM </i></font></u> </div><br><br>
              <div class="container">
                <div class="row">
              <div class="col-md-4">
              </div>
              <div class="col-md-4">
              	<form method ="post">
              		<div class="form-group">
                            Firstname - <input type="text" name="fname" placeholder="Enter First Name" class="form-control">
                    </div>
                    <div class="form-group">
                           Lastname - <input type="text" name="lname" placeholder="Enter Last Name" class="form-control">
                    </div>
                    <div class="form-group">
                            Degree - 
                                    <select class="form-control" name="degree">
                                       <option>BE</option>
                                       <option>ME</option>
                                    </select>
                    </div>
                    <div class="form-group">
                            Branch - 
                                    <select class="form-control" name="branch">
                                       <option>CSE</option>
                                       <option>Civil</option>
                                       <option>IT</option>
                                       <option>EXTC</option>
                                    </select> 
                    </div>
                    <div class="form-group">
                           Mobile No. - <input type="tel" name="mob" placeholder="Enter Mobile Number" class="form-control">
                    </div>
                    <div class="form-group">
                           Alternate Mobile - <input type="tel" name="altmob" placeholder="Enter Mobile Number" class="form-control">
                    </div>
                    <div class="form-group">
                           Passout Batch - 
                                         <select class="form-control" name="pbatch">
                                            <option>2012</option>
                                            <option>2013</option>
                                            <option>2014</option>
                                            <option>2015</option>
                                            <option>2016</option>
                                            <option>2017</option>
                                            <option>2018</option>
                                            <option>2019</option>
                                            <option>2020</option>
                                            <option>2021</option>
                                            <option>2022</option> 
                                            <option>2023</option>
                                            <option>2024</option> 
                                            <option>2025</option>
                                            <option>2026</option>
                                         </select>
                    </div>
                    <div class="form-group">
                          Current Company - <textarea class="form-control" name="company"></textarea>
                    </div>
                    <div class="form-group">
                         Workposition - <textarea class="form-control" name="workposition"></textarea>
                    </div>
                    <div class="form-group">
                         Email - <input type="email" class="form-control" name="email">
                    </div>
                    <div class="form-group">
                         Password - <input type="password" name="pwd" placeholder="Enter Password" class="form-control">
                    </div>
                    <div class="form-group">
                         Confirm Password - <input type="password" name="cpwd" placeholder="Enter Password" class="form-control">
                     </div> 
                    <div class="form-group">
                    	 <input type="submit" name="register_submit" class="btn btn-danger form-control" > 
                    </div>
              	</form>
              </div>
              <div class="col-md-4">
              </div>
          </div>
        </div>
</body>
</html>