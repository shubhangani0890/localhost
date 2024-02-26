<?php
//CREATE CONNECTION
$conn = mysqli_connect("localhost","root","","table");
// check connection
if($conn){
    echo "connected successfully<br>";
}

$sql ="SELECT * FROM `student`";
$result = mysqli_query($conn, $sql);
while($row = mysqli_fetch_assoc($result)){
    echo "student name: ".$row["name"]." roll no.: ".$row["roll"]." address: ".$row["address"]." dob: " . $row["dob"] . "<br>";
}
?>
 
