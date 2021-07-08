<?php 
include_once 'db.php';

$sql = 'SELECT * FROM motorstable ORDER BY id DESC LIMIT 1';
$result = $conn->query($sql);


if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo " motor1: " . $row["motor1"]. "<br>" . " motor2: " . $row["motor2"]. "<br>" . 
        " motor3: " . $row["motor3"]. "<br>" . " motor4: " . $row["motor4"]. "<br>" . 
        " motor5: " . $row["motor5"]. "<br>" . " motor6: " . $row["motor6"]. "<br>" . 
        " status: " . $row["motors_status"].    "<br>" . "<br>" .  
        "<a href='http://localhost/s-m%20IOT%20task%202/sliders.php'>back to control panel</a>";   
    }
}
else {
    echo "no results";
}



?>