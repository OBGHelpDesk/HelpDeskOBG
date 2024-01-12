<?php
    if ($SERVER['REQUEST_METHOD'] == 'POST'){
        $username = "admin";
        
        $password = 'monkey';
        

        if ($username == $_POST['username'] || $password == $_POST['password']) {
            setcookie('helpdesk_logedin', 1, time() + (86400), "/"); // 86400 = 1 day
            header('location: PridatOtazku.php');
        }


    }
?>


<!DOCTYPE html>
<html lang="cs">
<?php include_once "usefulPHP/head.php"; ?>
    <body>
    <?php include_once "usefulPHP/headerMenu.php"; ?>
    

    <div class="login_pole">
        <h1>Přihlášení</h1>
        <form id="loginForm">
            <div class="input-group">
              <label for="username">Jméno:</label>
              <input type="text" id="username" name="username" required>
            </div>
            <div class="input-group">
              <label for="password">Heslo:</label>
              <input type="password" id="password" name="password" required>
            </div>
            <input id="submuit" type="submit" value="Přihlásit">
        </form>
    </div>
</body>
</html>

<style>

    .login_pole{
        position: absolute;
        top:50%;
        left:50%;
        transform: translate(-50%, -50%);
        background:rgba(255, 255, 255, 0.8);;

        width: 300px;
        height: 300px;
        text-align: center;

        color: black;
        border-radius: 15px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    }

    .input-group {
        margin-bottom: 15px;
    }

    .input-group label {
        display: block;
        margin-bottom: 5px;
        margin-left: 5%;
        text-align: left;
    }

    .input-group input {
        width: 90%;
        height: 30px;
        border-radius: 5px;
        border: 1px solid #ccc;
    }

    #submuit{
        padding: 10px 20px;
        background-color: #ffd100;
        color: #000000;
        border: none;
        font-weight: 700;
        border-radius: 15px;
        cursor: pointer;
        position: absolute;
        bottom: 0px;
        left:50%;
        transform: translate(-50%, -50%);
    }

    #submuit:hover {
        background-color: #d8b000;
    }

</style>