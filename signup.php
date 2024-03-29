<?php
$servername = "sql202.infinityfree.com";
$username = "if0_35393938";
$password = "c6ncH8k5zpjDi";
$database = "if0_35393938_passwords";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


// Funkce pro dezinfekci uživatelského vstupu
function sanitize_input($input)
{
    return htmlspecialchars(stripslashes(trim($input)));
}

// Zkontrolujte, zda je formulář odeslán
if ($_SERVER['REQUEST_METHOD'] == "POST") {

    $username = strtolower($_POST['username']);
    $password = $_POST['password'];

    $sql = "SELECT username FROM passwords WHERE username = '$username' LIMIT 1";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $error_message = "Uživatelské jméno je již zabrané";
    } else {
        // Vloží nového uživatele do databáze
        $username = $conn->real_escape_string($username);
        $password = $conn->real_escape_string($password);
        $hashedPassword = hash("sha512", $password);
        // Use prepared statement with placeholders
        $sql = "INSERT INTO passwords (username, password) VALUES ('$username', '$hashedPassword')";

        // Execute the statement
        if ($conn->query($sql)) {
            echo "User successfully registered.";
            echo "Účet vytvořen, nyní se můžete přihlasit.";
            
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}

// Zavřete připojení k databázi
$conn->close();
?>
<!DOCTYPE html>
<html lang="cs">
<head>
    <?php include_once "usefulPHP/head.php"; ?>
    <script src="cookies.js"></script>
    <title>Zaregistrovat</title>
</head>

<body>
    <?php include_once "usefulPHP/headerMenu.php"; ?>
    </div>
            </div>
    <div class='signup_pole'>
        <h1>Registrace</h1>
        <?php
        // Zobrazit úspěšnou nebo chybovou zprávu, pokud existuje
        if (isset($success_message)) {
            echo "<p style='color: green;'>$success_message</p>";
        }
        if (isset($error_message)) {
            echo "<p style='color: red;'>$error_message</p>";
        }
        ?>
        <form id='loginForm' method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
            <div class='input-group'>
                <label for='username'>Uživatelské jméno:</label>
                <input type='text' id='username' name='username' required>
            </div>
            <div class='input-group'>
                <label for='password'>Heslo:</label>
                <input type='password' onchange="validatePassword" id='password' name='password' required>
            </div>
            <div class='input-group'>
                <label for='password'>Potvrzení hesla:</label>
                <input type='password' id='password2' name='password2' required>
            </div>
            <input id="submuit"  type="submit" value="Zaregistrovat">
        </form>
        <div class="registerLink">
        <p>Máte účet?</p>
        <a href="login.php">Přihlaste se!</a>
        </div>
    </div>
</body>

</html>