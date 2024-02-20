<?php
//CREATE CONNECTION
$conn = mysqli_connect("localhost","root","","student");
// check connection
if($conn){
    echo "connected successfully";
}
$sql ="SELECT * FROM `class record`";
$result = mysqli_query($conn, $sql);
while($row = mysqli_fetch_assoc($result)){
    echo "ID: " . $row["ID"] .  " Name: " . $row["Name"] . " Address: " . $row["Address"] . " dob: " . $row["dob"] . "<br>";
}
?>