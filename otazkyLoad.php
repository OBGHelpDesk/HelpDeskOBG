<?php
$servername = "sql202.infinityfree.com";
$username = "if0_35393938";
$password = "c6ncH8k5zpjDi";
$database = "if0_35393938_OBG_Helpdesk";

// Create connection
$conn = new mysqli($servername, $username, $password,$database);
$conn->set_charset("utf8");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else {
    // echo "Connected successfully";
}
$sql='SELECT ID, Nazev, Subject, Text FROM SWA_POG WHERE 1';
$result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {

                echo"<h2 id='". $row['Nazev']."'>". $row["Subject"] . $row["ID"] ." - ". $row["Nazev"]." </h2>";
                echo "<p>". $row["Text"] ."</p>";
                echo "<a href='/Wordy/". $row["Subject"] . $row["ID"] .".docx'download><span class='material-symbols-outlined'>download</span>Stáhnout soubor</a>";
            }
        }

$sql='SELECT ID, Nazev, Subject, Text FROM POS_PRG WHERE 1';
$result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                
                echo"<h2 id='". $row['Nazev']."'>". $row["Subject"] . $row["ID"] ." - ". $row["Nazev"]." </h2>";
                echo "<p>".$row["Text"] ."</p>";
                echo "<a href='/Wordy/' ". $row["Subject"] . $row["ID"] ."download><span class='material-symbols-outlined'>download</span>Stáhnout soubor</a>";
            }
        }
?>