<?php
    $error = "  ";
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
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
        
        if ($username == $getUsername && $password == $getPassword) {
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

        <div class="login_pole">
            <h1>Přihlášení</h1>
            <form id="loginForm" action="login.php" method='post'>
                <div class="input-group">
                    <label for="username">Jméno:</label>
                    <input type="text" id="username" name="username" required>
                </div>
                <div class="input-group">
                    <label for="password">Heslo:</label>
                    <input type="password" id="password" name="password" required>
                    <?php echo "<p style='color: red;'>$error</p>"; ?>
                </div>
                <input id="submuit" type="submit" value="Přihlásit">
            </form>
        </div>
    </body> 
</html>
