<?php

$connect = mysqli_connect("localhost", "root", "root", "erd");  
 
  
#$sql = "SELECT * FROM reservation INNER JOIN parking on reservation.Reserv_ID = parking.Park_ID  WHERE reservation.Timeofentry = parking.Timeofexit ";
$sql = "SELECT * FROM parking WHERE Status='free' ";
$result = mysqli_query($connect, $sql);

?>
<!DOCTYPE html>  
 <html>  
      <head>  
           <title>about_parking</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
      </head> 
      <style>
        body{
            margin: 0;
            padding: 0;
        }
        .container1{
            text-align: center;
            margin-top: 360px;
        }
        .btn{
            border: 1px solid #3498db;
            background: none;
            padding: 10px 20px;
            font-size: 20px;
            font-family: "montserrat";
            cursor: pointer;
            margin: 10px;
        }
</style>
      <body>  
           <br />  
           <div class="container" style="width:500px;">  
                <!--h3 align="">Fetch Data from Two or more Table Join using PHP and MySql</h3><br /-->                 
                <div class="table-responsive">  
                     <table class="table table-striped">  
                          <tr>  
                               <th>Park_ID</th>  
                               <th>Park_Lot</th>
                               <th>Status</th>
                          </tr>  
                          <?php  
                          if(mysqli_num_rows($result) > 0)  
                          {  
                               while($row = mysqli_fetch_array($result))  
                               {  
                          ?>  
                          <tr> 
                               <td><?php echo $row["Park_ID"];?></td>
                               <td><?php echo $row["Park_Lot"];?></td>
                               <td><?php echo $row["Status"];?></td>    
                          </tr>  
                          <?php  
                               }  
                          } else echo "<h1>no parking</h1>";
                          ?>  
                     </table>  
                </div>  
           </div>  
           <br />  
               <div class="container1">
                    <button onclick="document.location='reservation.html'" class="btn btn1">Reservation</button>
               </div>
    </div>
      </body>  
 </html>  
 