<?php

$connect = mysqli_connect("localhost", "root", "root", "erd");  
 
  

$sql = "SELECT r.Reserv_ID, r.Poly_ID, r.Dateofentry, r.Timeofentry, r.Timeofexit, p.PolytechnicsName, p.Address, pa.Park_Lot
FROM reservation AS r 
INNER JOIN polytechnics As p
INNER JOIN parking AS pa
ON r.Poly_ID = p.Poly_ID AND r.Park_ID = pa.Park_ID
ORDER BY Reserv_ID DESC LIMIT 1";
$result = mysqli_query($connect, $sql);

?>
<!DOCTYPE html>  
 <html>  
      <head>  
           <title>last</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
      </head>  
      <body>  
           <br />  
           <div class="container" style="width:500px;">  
                <!--h3 align="">Fetch Data from Two or more Table Join using PHP and MySql</h3><br /-->                 
                <div class="table-responsive">  
                     <table class="table table-striped">  
                          <tr>  
                               <th>ID</th>    
                               <th>PolytechnicsName</th>
                               <th>Dateofentry</th>  
                               <th>Timeofentry</th>  
                               <th>Timeofexit</th>
                               <th>Park_Lot</th>
                             
                          </tr>  
                          <?php  
                          if(mysqli_num_rows($result) > 0)  
                          {  
                               while($row = mysqli_fetch_array($result))  
                               {  
                          ?>  
                          <tr> 
                               <td><?php echo $row["Reserv_ID"];?></td>  
                               <td><?php echo $row["PolytechnicsName"]; ?></td> 
                               <td><?php echo $row["Dateofentry"]; ?></td> 
                               <td><?php echo $row["Timeofentry"];?></td>  
                               <td><?php echo $row["Timeofexit"];?></td> 
                               <td><?php echo $row["Park_Lot"];?></td> 
                               
                          </tr>  
                          <?php  
                               }  
                          }  
                          ?>  
                     </table>  
                </div>  
           </div>  
           <br />  
      </body>  
 </html>  
 