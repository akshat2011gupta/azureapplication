<?php
try {
    $conn = new PDO("sqlsrv:server = tcp:exam123.database.windows.net,1433; Database = UniversityDB", "akshat", "9412629406aA@");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}



$roll=$_POST["roll"];


$sql = "select * from topstudents where rollno='$roll'";



foreach($conn->query($sql) as  $row)
{
     echo $row["id"];
     echo "\n";
     echo $row["firstname"];
     echo "\n";
     echo $row["lastname"];
     echo "\n";
     echo $row["rollno"];
     echo "\n";
     echo $row["major"];
}




$conn.close();



?>
