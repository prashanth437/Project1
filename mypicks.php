<!DOCTYPE html>
<html>
<head>
   <title>My Picks</title>
   <style type ="text/css">
        th { font-size: 110%; border-bottom: 2px solid black; }
        td { padding: 3px; border-bottom: 1px solid #aaa }
   </style>
</head>
<body>
<h1>My Picks</h1>
<table>
<?php
echo '<tr><th>S.NO</th><th>Postion</th><th>Player Name</th><th>Team Name</th>';
$DB_Server = "localhost"; //MySQL Server    
$DB_Username = "pmunagala"; //MySQL Username     
$DB_Password = "mysql";             //MySQL Password     
$DB_DBName = "myteam";         //MySQL Database Name  
$DB_TBLName = "mypicks"; //MySQL Table Name   


$conn = new mysqli($DB_Server, $DB_Username, $DB_Password, $DB_DBName);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT SNO, Postion, Player_Name, Team_Name FROM mypicks";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        
        echo  "       " .$row["SNO"]. "         |"   . $row["Postion"].  "        | " . $row["Player_Name"]. "           | " . $row["Team_Name"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();

?>
</table>
</body>
</html>
