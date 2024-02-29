<?php 
if (!isset($_COOKIE['helpdesk_logedin'])) {
    echo '<script> alert("Pro zobrazení obsahu se prosím přihlšte."); </script>';
    header('location: login.php');
    die();
}
?>


<!DOCTYPE html>
<html lang="cs">
<?php include_once "usefulPHP/head.php"; ?>
    <body>
    <div class="blur">
    <?php include_once "usefulPHP/headerMenu.php"; ?>
    <div class='vyhledavani'>
                <form action=''>
                    <!--  <button type='submit'><i class='fa fa-search'></i></button> -->   
                    <input id='findInput' type='text' placeholder='  Hledat ..🤡' autocomplete='off'>
                </form>
            </div>
            </div>
            </div>
            

        <div id="pole" class="pole">
            <div id="levaCast" class="levaCast">

            <?php
            require_once("otazkyLoad.php")
            ?>
            </div>

            <div class="pravaCast">
                <div class="temata" id="predmetyClick">
                    <p class="tag" id="pogClick">POG</p>
                    <p class="tag" id="swaClick">SWA</p>
                    <p class="tag" id="posClick">POS</p>
                    <p class="tag" id="prgClick">PRG</p>
                </div>

                <!-- php vím ne? -->
                <?php require("okruhyLoad.php"); ?>
            </div>
        </div>

        <a id="topBtn" href="#top" title="Go to top">
        <div class="pointerUp">☝</div>
        </a>
        </div>
        <?php
        if (!isset($_COOKIE['cookie'])) {
            echo "
            <div class='popup' id='popup'>
                <h2>Používáme Cookies</h2>
                <div class='bottomCookies'>
                    <p>Používáním stránek souhlasíte s jejich využitím</p>
                    <button id='okCookies' onclick='ClosePopup();'>OK</button>
                </div>
            /div>
            ";
        }
        
        ?>
    </body>
<!--  
<footer>
    OBG, 2023
</footer>
-->
</html>