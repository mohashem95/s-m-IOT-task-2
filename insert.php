<?php
include_once 'db.php';



if(isset($_POST['checkbox'])) {
    $motors_status = 'on';
} else { 
    $motors_status = 'off';
}


if(isset($_POST['submit']))
{    
     $motor1 = $_POST['motor1'];
     $motor2 = $_POST['motor2'];
     $motor3 = $_POST['motor3'];
     $motor4 = $_POST['motor4'];
     $motor5 = $_POST['motor5'];
     $motor6 = $_POST['motor6'];
     $motors_status ;
     $sql = "INSERT INTO motorsTable (motor1,motor2,motor3,motor4,motor5,motor6,motors_status)
     VALUES ('$motor1','$motor2','$motor3','$motor4','$motor5','$motor6','$motors_status')";
     if (mysqli_query($conn, $sql)) {
        echo '    <p>New record has been added successfully !</p>
        <a href="http://localhost/s-m%20IOT%20task%202/sliders.php">back to control panel</a> <br>
        <a href="http://localhost/s-m%20IOT%20task%202/query.php">veiw last row</a>';
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
}


?>