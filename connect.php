<?php

//database connecton

$conn = new mysqli('localhost', 'root', 'root', 'erd');
if($conn ->connect_error){
    die('Connection Failed : '.$conn->connect_error );
}
else{
    if (isset($_POST['submitstaff']) == TRUE ) {

        $Surname = $_POST['Surname'];
        $Name = $_POST['Name'];
        $PhoneNumber = $_POST['PhoneNumber'];
        $VehicleNumber = $_POST['VehicleNumber'];
        $EmergencyNumber = $_POST['EmergencyNumber'];
        $Address = $_POST['Address'];
        $Email = $_POST['Email'];
        $Department = $_POST['Department'];

        $stmt = $conn->prepare("insert into staff(Surname, Name, PhoneNumber, VehicleNumber, Email, Address, EmergencyNumber, Department) 
            values(?,?,?,?,?,?,?,?)");
        $stmt->bind_param("ssisssis",$Surname, $Name, $PhoneNumber, $VehicleNumber, $Email, $Address, $EmergencyNumber, $Department );
        $stmt->execute();
        echo "New record inserted successfully";
        #$stmt->close();
        #$conn->close();

        $stmt = $conn->prepare("insert into mix(Surname, Name) 
            values(?,?)");
        $stmt->bind_param("ss",$Surname, $Name );
        $stmt->execute();
        echo "New record inserted successfully";
        $stmt->close();
        $conn->close();

        
        
    
    }
    elseif  (isset($_POST['submitstudent']) == TRUE ) {

        $Surname = $_POST['Surname'];
        $Name = $_POST['Name'];
        $PhoneNumber = $_POST['PhoneNumber'];
        $VehicleNumber = $_POST['VehicleNumber'];
        $EmergencyNumber = $_POST['EmergencyNumber'];
        $Address = $_POST['Address'];
        $Email = $_POST['Email'];
        $CourseName = $_POST['CourseName'];

        $stmt = $conn->prepare("insert into student(Surname, Name, PhoneNumber, VehicleNumber, Email, Address, EmergencyNumber, CourseName) 
            values(?,?,?,?,?,?,?,?)");
        $stmt->bind_param("ssisssis",$Surname, $Name, $PhoneNumber, $VehicleNumber, $Email, $Address, $EmergencyNumber, $CourseName );
        $stmt->execute();
        echo "New record inserted successfully";
        #$stmt->close();
        #$conn->close();

        $stmt = $conn->prepare("insert into mix(Surname, Name) 
            values(?,?)");
        $stmt->bind_param("ss",$Surname, $Name );
        $stmt->execute();
        echo "New record inserted successfully";
        $stmt->close();
        $conn->close();
    }
    else {
        if (isset($_POST['submitpublic']) == TRUE ) {

        $Surname = $_POST['Surname'];
        $Name = $_POST['Name'];
        $PhoneNumber = $_POST['PhoneNumber'];
        $VehicleNumber = $_POST['VehicleNumber'];
        $EmergencyNumber = $_POST['EmergencyNumber'];
        $Address = $_POST['Address'];
        $Email = $_POST['Email'];
        $Reason = $_POST['Reason'];

        $stmt = $conn->prepare("insert into public(Surname, Name, PhoneNumber, VehicleNumber, Email, Address, EmergencyNumber, Reason) 
            values(?,?,?,?,?,?,?,?)");
        $stmt->bind_param("ssisssis",$Surname, $Name, $PhoneNumber, $VehicleNumber, $Email, $Address, $EmergencyNumber, $Reason );
        $stmt->execute();
        echo "New record inserted successfully";
        #$stmt->close();
        #$conn->close();

        $stmt = $conn->prepare("insert into mix(Surname, Name) 
            values(?,?)");
        $stmt->bind_param("ss",$Surname, $Name );
        $stmt->execute();
        echo "New record inserted successfully";
        $stmt->close();
        $conn->close();

        }
        
    }

}
?>
