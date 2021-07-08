<?php
include_once 'db.php';





if (isset($_POST['selected'])) {
    $val = substr($_POST['selected'], 0, 1);
    

    $ins_sql = "INSERT INTO directions (robot_direction)
    VALUES ('$val')" ;
    if (mysqli_query($conn, $ins_sql)) {
        echo '    <p>New direction has been added successfully !</p>
        <a href="http://localhost/s-m%20IOT%20task%202/sliders.php">back to control panel</a> <br>
        <a href="http://localhost/s-m%20IOT%20task%202/query_dir.php">veiw last direction added</a> ';
     } else {
        echo "Error: " . $ins_sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
}



?>