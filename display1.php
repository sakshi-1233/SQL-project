<!--<?php

include "Registration1.php";
$selectquery="select * from data";
$query=mysqli_query($con,$selectquery);
$res=mysqli_fetch_array($query);
?>-->


<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <title>Display record</title>

  <script
  src="https://code.jquery.com/jquery-3.6.0.js"
  integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
  crossorigin="anonymous"></script>
  
   <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
   <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script> 
  
  <style>
    h1{
      text-align:center;
      top-margin:10px;
    }
  </style>

</head>
<body>
<div class="main div">
  <h1><u>List of Registrations</u></h1><br>
  <div class="container">
    <div class="table-responsive">
      <table class="table table-bordered table-striped" id="tab">
        <thead>
          <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Qualification</th>
            <th>Branch</th>
            <th>Email</th>
            <th>Mobile</th>
            <th>Passout Year</th>
            
          </tr>
        </thead>
        <tbody id="sakshi">
          <?php

                  include "connection.php";
                  $selectquery=" select * from data";
                  $query= mysqli_query($con,$selectquery);
                  while($res=mysqli_fetch_array( $query))
                  
                   {
                    ?>
                    <tr>
                       <td><?php echo $res['fname']?></td>
                      <td><?php echo $res['lname']?></td>
                      <td><?php echo $res['degree']?></td>

                      <td><?php echo $res['branch']?></td>
                      <td><?php echo $res['email']?></td>
                      <td><?php echo $res['mob']?></td>
                      <td><?php echo $res['pbatch']?></td>

                    </tr>
                <?php
                   }
                  ?>
         
        </tbody>
      </table>
    </div>
  </div>
</div>
<!--<script>
  $(document).ready(function(){
      $("#demo").keyup(function(){
        var value = $(this).val();

        $("tbody tr").filter(function(){
          $(this).toggle($(this).text().indexOf(value)>0)
        })
      })
  })
</script>-->
<script>
  $(document).ready(function(){
    $("#tab").DataTable();
  })
</script>
</body>
</html>