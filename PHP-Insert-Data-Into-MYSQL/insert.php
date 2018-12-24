<?php
include_once ('./config.php');
$me = $_POST['userName'];
$father = $_POST['fatherName'];
 //echo $uName;
//echo $fName;
$data = "INSERT INTO userinfo(uName,fname) VALUES('$me','$father')";
if (!mysqli_query($con, $data)) {
    echo "Data Not Inserted";
} else{
    echo "Data Insert into Database";
}

header("refresh:2; url=index.html");
?>