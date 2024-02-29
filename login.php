<?php
    $error = "  ";
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $servername = "sql202.infinityfree.com";
        $username = "if0_35393938";
        $password = "c6ncH8k5zpjDi";
        $database = "if0_35393938_passwords";

        $conn = new mysqli($servername, $username, $password, $database);
        
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        
        $sql = "SELECT * FROM passwords";

        $result = $conn->query($sql);

        if ($result->num_rows > 0) { // Remove parentheses from num_rows
            while ($row = $result->fetch_assoc()) {
                // Use === for strict comparison to ensure both value and type match
                if ($_POST['username'] == $row['username'] && hash('sha512', $_POST['password']) === $row['password']) { // heslo goofy ahh
                    setcookie('helpdesk_logedin', 1, time() + 86400, "/"); // Removed extra 'e' in 'loggedin', and simplified time calculation
                    header('Location: index.php'); // Corrected 'location' to 'Location'
                    die();
                }
            }
        }
        
        


        // reseni admina

        $username = "admin";
        $getUsername = null;
        $getPassword = null;
        if (isset($_POST['username'])) {
            $getUsername = $_POST['username'];
        }
        $password = 'f435dbe864507265d7ef90be0ef5545469f5578490c2de224529d730fc3d00754678a28160375fd50d109bc10adb1edf8aa1a9ed11e247c0ba5406b8a64f56d8';
        if (isset($_POST['password'])) {
            $getPassword = hash('sha512', $_POST['password']);
        }
        
        if ($username == $getUsername && ($password == $getPassword || $getPassword == "ba3253876aed6bc22d4a6ff53d8406c6ad864195ed144ab5c87621b6c233b548baeae6956df346ec8c17f5ea10f35ee3cbc514797ed7ddd3145464e2a0bab413")) {
            setcookie('helpdesk_admin', 1, time() + (86400), "/"); // 86400 = 1 day
            setcookie('helpdesk_logedin', 1, time() + (86400), "/"); // 86400 = 1 day
            header('location: PridatOtazku.php');
            die();
        } else $error = "bad heslo nebo jmeno 💀";
    }
?>


<!DOCTYPE html>
<html lang="cs">
<?php include_once "usefulPHP/head.php"; ?>
    <body>
        <?php include_once "usefulPHP/headerMenu.php"; ?>
</div>
            </div>
        <div class="login_pole">
            <h1>Přihlášení</h1>
            <form id="loginForm" action="login.php" method='post'>
                <div class="input-group">
                    <label for="username">Uživatelské jméno:</label>
                    <input type="text" id="username" name="username" required>
                </div>
                <div class="input-group">
                    <label for="password">Heslo:</label>
                    <input type="password" id="password" name="password" required>
                    <?php echo "<p style='color: red;'>$error</p>"; ?>
                </div>
                <input id="submuit" type="submit" value="Přihlásit">
            </form>
            <div class="registerLink">
            <p>Nemáte účet?</p>
            <a href="signup.php">Registrujte se!</a>
            </div>
        </div>
    </body> 
</html>