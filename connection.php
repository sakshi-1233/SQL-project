<?php

 $con = mysqli_connect("localhost" , "root" ,"" , "project") ;

 if($con)
  {
     ?><script>alert("Data Stored Successfully");</script><?php
   }
   else
   {
     ?><script>alert("Something Went Wrong.Try again Later");</script><?php
   }
?>