<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport'/>
    <meta name="viewport" content="width=device-width"/>
    <title>OBG Helpdesk</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Domine:wght@600&family=Roboto&display=swap" rel="stylesheet">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
    <div class="nadpis">
        <h1>OBG HelpDesk</h1>

        <div class="navbar">
            <a href="index.html">Home</a>
            <a href="about.html">About</a>
            <a href="contact.html">Contact</a>

            <div class="vyhledavani">
                <form action="">
                    <!--  <button type="submit"><i class="fa fa-search"></i></button> -->   
                    <input id="findInput" type="text" placeholder="Hledat ..🤡" autocomplete="off">
                </form>
            </div>


        </div>

    </div>


    <div class="pole">
        <div class="levaCast">
            <h2>Téma 1</h2>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Etiam dui sem, fermentum vitae, sagittis id, malesuada in, quam. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur? Nulla quis diam. Aenean vel massa quis mauris vehicula lacinia. Integer in sapien. Etiam egestas wisi a erat. In convallis. Aliquam erat volutpat. Ut tempus purus at lorem. Suspendisse sagittis ultrices augue. Nam quis nulla. Fusce tellus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos hymenaeos. In laoreet, magna id viverra tincidunt, sem odio bibendum justo, vel imperdiet sapien wisi sed libero. Integer rutrum, orci vestibulum ullamcorper ultricies, lacus quam ultricies odio, vitae placerat pede sem sit amet enim. Fusce wisi. Aenean id metus id velit ullamcorper pulvinar. In convallis.

                Mauris tincidunt sem sed arcu. Praesent dapibus. Nam sed tellus id magna elementum tincidunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Mauris dolor felis, sagittis at, luctus sed, aliquam non, tellus. Aenean placerat. Maecenas libero. Aliquam erat volutpat. Nullam feugiat, turpis at pulvinar vulputate, erat libero tristique tellus, nec bibendum odio risus sit amet ante. Nulla accumsan, elit sit amet varius semper, nulla mauris mollis quam, tempor suscipit diam nulla vel leo.
                
                Integer lacinia. Nullam justo enim, consectetuer nec, ullamcorper ac, vestibulum in, elit. Mauris metus. Integer in sapien. Fusce tellus. Nulla turpis magna, cursus sit amet, suscipit a, interdum id, felis. Aliquam in lorem sit amet leo accumsan lacinia. In enim a arcu imperdiet malesuada. Maecenas sollicitudin. Nam quis nulla. Suspendisse sagittis ultrices augue. Nulla accumsan, elit sit amet varius semper, nulla mauris mollis quam, tempor suscipit diam nulla vel leo. Etiam dui sem, fermentum vitae, sagittis id, malesuada in, quam. Curabitur sagittis hendrerit ante. Cras pede libero, dapibus nec, pretium sit amet, tempor quis. In enim a arcu imperdiet malesuada. In convallis. Etiam dictum tincidunt diam. Praesent dapibus.</p>
        </div>

        

        <div class="temata">
            <p id="pogClick">POG</p>
            <p id="swaClick">SWA</p>
            <p id="posClick">POS</p>
            <p id="prgClick">PRG</p>
        </div>

        
        <!-- php vím ne? -->
        <?php require("php.php"); ?>



    </div>

</body>
<!--  
<footer>
    OBG, 2023
</footer>
-->
</html>