<?php



$conn = new mysqli('localhost', 'root', 'root', 'erd');
if($conn ->connect_error){
    die('Connection Failed : '.$conn->connect_error );
}
else{
    #if (isset($_POST['submitreserv']) == TRUE ) {

        $Poly_ID = $_POST['Poly_ID'];
        $Park_ID = $_POST['Park_ID'];
        #$Location = $_POST['Location'];
        $Dateofentry = $_POST['Dateofentry'];
        $Timeofentry = $_POST['Timeofentry'];
        $Timeofexit = $_POST['Timeofexit'];

        

        $stmt = $conn->prepare("insert into reservation(Poly_ID, Park_ID, Dateofentry, Timeofentry, Timeofexit) 
            values(?,?,?,?,?)");
        $stmt->bind_param("iisss",$Poly_ID, $Park_ID, $Dateofentry, $Timeofentry, $Timeofexit);
        $stmt->execute();
        echo "New record inserted successfully";
        header("Location: last.php ");
        /**************************************************************************************************************************************/
        $connect = mysqli_connect("localhost", "root", "root", "erd");
        $Park_ID = $_POST['Park_ID'];
        $Status = $_POST['Status'];

        $query = "UPDATE parking SET Dateofentry='$Dateofentry', Timeofentry='$Timeofentry', Timeofexit='$Timeofexit', Status='$Status' WHERE Park_ID='$Park_ID' ";
        $query_run = mysqli_query($connect, $query);

        if($query_run)
        {
            
            echo "record update";
        }
        else
        {
        echo "Your Data is NOT Updated";
        
        
        }
}





        /**************************************************************************************************************************************/
        $stmt->close();
        $conn->close();

        
        
    
    #}



?>
