<?php
try {
    $conn = new PDO("sqlsrv:server = tcp:exam123.database.windows.net,1433; Database = UniversityDB", "akshat", "9412629406aA@");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}
Print("Taking Values \n");
$id='17';
$roll=$_POST["roll"];
$first=$_POST["first"];
$last=$_POST["last"];
$gpa=$_POST["gpa"];
$major=$_POST["major"];


Print("Adding Values Into ");
$data = [
    'id' => $id,
    'roll' => $roll,
    'first' => $first,
    'last' => $last,
    'gpa' => $gpa,
    'major' => $major,
];
$sql = "INSERT INTO topstudents VALUES (:id ,:roll, :first, :last,:gpa,:major)";


$stmt= $conn->prepare($sql);
$stmt->execute($data);
Print("Ending program");

$conn.close();
?>

