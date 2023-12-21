<?php
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


        if ($conn->query($sql) === true) {
            echo "Record updated successfully";
        } else {
            echo "Error updating record: ";
        }
    }

        echo ("SWA" == $_POST['predmet'] || "POG" == $_POST['predmet']);
    if ("SWA" == $_POST['predmet'] || "POG" == $_POST['predmet']) {

        $sql = "UPDATE SWA_POG SET Text = '".$_POST['text']."' WHERE SWA_POG.ID = ".$_POST["cislo"];


        if ($conn->query($sql) === true) {
            echo "Record updated successfully";
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

    <style>
        .pridaniOtazky {
            color: black;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            width: 300px;
            margin: auto;
            margin-top:100px;
            display:flex;
            flex-direction:column;
            position:sticky;
            bottom:25px;
        }

        .pridaniOtazky div{
            margin: 10px 15px;
        }

        input[type="text"], input[type="number"]{
            width:250px;
        }

        input[type="file"] {
            margin: auto;
            margin-bottom: 0px;
        }

        input[type="submit"] {
            margin: auto;
            margin-top:0px;
            background-color: #ffd100;
            color: #000;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width:120px;
            font-size:20px;
            font-weight:bold;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
            margin: auto;
        }

        input::file-selector-button {
            font-weight: bold;
            background: #ffd100;
            color: black;
            padding: 10px;
            border:none;
            border-radius: 3px;
        }

        select {
            height: 21px;
            width: 250px;
        }
    </style>

<body>
<?php include_once "usefulPHP/headerMenu.php"; ?>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data" class="pridaniOtazky">
                <div>
                    <label for="cislo">Číslo otázky:</label>
                    <br>
                    <input id="cislo" name="cislo" type="number">
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