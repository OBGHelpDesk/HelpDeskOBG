<div class='bg'></div>
    
    <div class='nadpis'>
        <a href='index.php'><h1 id="top">OBG HelpDesk</h1></a>
        <?php 
        if (!isset($_COOKIE['helpdesk_logedin'])) 
        { 
            echo "<a class='login' href='login.php'>Přihlásit</a>"; 
        }
        else 
        {
            echo "<a class='login' href='logout.php'>Odhlásit</a>"; 
        }
        ?>
        
        <div class='navbar'>
            <a href='index.php'>Home</a>
            <a href='about.php'>About</a>
            <a href='contact.php'>Contact</a>

            <?php 
            if (isset($_COOKIE['helpdesk_admin'])) 
            { 
                echo "<a href='PridatOtazku.php'>Add question</a>"; 
            }
            ?>

            

            <a href='help.php'>Need Help?</a>

            <div class='vyhledavani'>
                <form action=''>
                    <!--  <button type='submit'><i class='fa fa-search'></i></button> -->   
                    <input id='findInput' type='text' placeholder='Hledat ..🤡' autocomplete='off'>
                </form>
            </div>
        </div>
    </div>