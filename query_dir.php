<?php 
include_once 'db.php';

$sql = 'SELECT * FROM directions ORDER BY id DESC LIMIT 1';
$result = $conn->query($sql);


if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo  $row["robot_direction"].   "<br>" . "<br>" .  
        "<a href='http://localhost/s-m%20IOT%20task%202/sliders.php'>back to control panel</a>";   
    }
}
else {
    echo "no results";
}



?>