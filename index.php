<!DOCTYPE html>
<html lang="cs">
<?php include_once "usefulPHP/head.php"; ?>
    <body>
    <?php include_once "usefulPHP/headerMenu.php"; ?>

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

    </body>
<!--  
<footer>
    OBG, 2023
</footer>
-->
</html>