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


?>
<div id="pogChoose" class="temata">
    <ul id="pogOtazky">
        
        <?php
        $sql = "SELECT ID, Nazev, Subject FROM SWA_POG WHERE Subject = 'POG'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            for ($i= 1; $i <= $result->num_rows; $i++ ) {
                $row = $result->fetch_assoc();
                if ($i == 1) {
                    echo "<li id='first'>";
                } elseif ($i == $result->num_rows){
                    echo "<li id='last'>";
                }
                else {
                    echo "<li>";
                }
                    echo "
                        <a href='#" . $row['Nazev']."'>
                            <p>" . $row['ID']. ". " . $row['Nazev']."</p>
                        </a>
                    </li>";
            }
            
        }
        ?>
    </ul>
</div>

<div id="swaChoose" class="temata">
    <ul id="swaOtazky">

        <?php
        

        $sql = "SELECT ID, Nazev, Subject FROM SWA_POG WHERE Subject = 'SWA'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            for ($i= 1; $i <= $result->num_rows; $i++ ) {
                $row = $result->fetch_assoc();
                if ($i == 1) {
                    echo "<li id='first'>";
                } elseif ($i == $result->num_rows){
                    echo "<li id='last'>";
                }
                else {
                    echo "<li>";
                }
                    echo "
                        <a href='#" . $row['Nazev']."'>
                            <p>" . $row['ID']. ". " . $row['Nazev']."</p>
                        </a>
                    </li>";
            }
            
        }
        ?>
    </ul>
</div>


<div id="posChoose" class="temata">
    <ul id="posOtazky">
        
        <?php
        $sql = "SELECT ID, Nazev, Subject FROM POS_PRG WHERE Subject = 'POS'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            for ($i= 1; $i <= $result->num_rows; $i++ ) {
                $row = $result->fetch_assoc();
                if ($i == 1) {
                    echo "<li id='first'>";
                } elseif ($i == $result->num_rows){
                    echo "<li id='last'>";
                }
                else {
                    echo "<li>";
                }
                    echo "
                        <a href='#" . $row['Nazev']."'>
                            <p>" . $row['ID']. ". " . $row['Nazev']."</p>
                        </a>
                    </li>";
            }
            
        }
        ?>
    </ul>
</div>

<div id="prgChoose" class="temata">
    <ul id="prgOtazky">
        
        <?php
        $sql = "SELECT ID, Nazev, Subject FROM POS_PRG WHERE Subject = 'PRG'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            for ($i= 1; $i <= $result->num_rows; $i++ ) {
                $row = $result->fetch_assoc();
                if ($i == 1) {
                    echo "<li id='first'>";
                } elseif ($i == $result->num_rows){
                    echo "<li id='last'>";
                }
                else {
                    echo "<li>";
                }
                    echo "
                        <a href='#" . $row['Nazev']."'>
                            <p>" . $row['ID']. ". " . $row['Nazev']."</p>
                        </a>
                    </li>";
            }
            
        }
        $conn->close();
        ?>
    </ul>
</div>
