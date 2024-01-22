<?php

if (!isset($_COOKIE['helpdesk_logedin'])){
    echo "<script> alert('přihlásit plz'); </script>";
    header('location: login.php');
    die();
}


// Check if the form was submitted
$requestMethod = isset($_SERVER['REQUEST_METHOD']) ? $_SERVER['REQUEST_METHOD'] : null;
if ($requestMethod == "POST") {


    // write to db
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

    if ("POS" == $_POST['predmet'] || "PRG" == $_POST['predmet']) {

        $sql = "UPDATE POS_PRG SET Text = '".$_POST['text']."' WHERE POS_PRG.ID = ".$_POST["cislo"];


        if (("POS" == $_POST['predmet'] && $_POST["cislo"] < 13) || ("PRG" == $_POST['predmet'] && $_POST["cislo"] > 12)) {
                echo "Record updated successfully";
                $conn->query($sql);
            } else {
                echo "Error updating record: ";
            }
    }

    if ("SWA" == $_POST['predmet'] || "POG" == $_POST['predmet']) {

        $sql = "UPDATE SWA_POG SET Text = '".$_POST['text']."' WHERE SWA_POG.ID = ".$_POST["cislo"];


        if (("SWA" == $_POST['predmet'] && $_POST["cislo"] > 9 && $_POST["cislo"] < 24) || ("POG" == $_POST['predmet'] && $_POST["cislo"] < 10)) {
            echo "Record updated successfully";
                $conn->query($sql);
            } else {
                echo "Error updating record: ";
            }
        }
    $conn->close();
    

    
    
    // Check if a file was selected for upload
    if (isset($_FILES["fileToUpload"])) {
        
        // File details
        $targetDir = "Wordy/"; // Specify the directory where you want to store uploaded files
        $targetFile = $targetDir . basename($_FILES["fileToUpload"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
        /*
        // Check if the file already exists
        if (file_exists($targetFile)) {
            echo "Sorry, the file already exists.";
            $uploadOk = 0;
        }*/
        
        // Allow only certain file formats (you can customize this list)
        $allowedFormats = array("docx","doc","ofd","pdf");
        if (!in_array($imageFileType, $allowedFormats)) {
            echo "Sorry, only word files are allowed.";
            $uploadOk = 0;
        }
        
        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
        } else {
            // Move the file to the specified directory
            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFile)) {
                echo "The file " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " has been uploaded.";
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }
    }

}
?>

<!DOCTYPE html>
<html lang="cs">
<?php include_once "usefulPHP/head.php"; ?>

<body>
<?php include_once "usefulPHP/headerMenu.php"; ?>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data" class="pridaniOtazky">
        <h1>Přídat otázku</h1>
        <div>
            <label for="cislo">Číslo otázky:</label>
            <br>
            <input id="cislo" name="cislo" type="number" min="1" max="28">
        </div>
        <div>
            <label for="text">Text:</label>
            <br>
            <input id="text" name="text" type="text">
        </div>
        <div>
            <label for="predmet">Předmět:</label>
            <br>
            <select name="predmet" id="predmet">
                <option value="SWA">Software a webové aplikace</option>
                <option value="POG">Počítačová grafika</option>
                <option value="POS">Počítačové sítě</option>
                <option value="PRG">Programování</option>
            </select>
        </div>
        <div>
            <label for="word">Word dokument:</label>
            <br>
            <input type="file" name="fileToUpload" id="word">
        </div>
        <br>
        <input type="submit" value="Odeslat">

    </form>
</body>
<!--  
<footer>
    OBG, 2023
</footer>
-->
</html>