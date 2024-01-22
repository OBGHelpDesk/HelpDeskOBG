<div class='bg'></div>
    
    <div class='nadpis'>
        <h1 id="top">OBG HelpDesk</h1>
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
            <a href='PridatOtazku.php'>Add question</a>

            <div class='vyhledavani'>
                <form action=''>
                    <!--  <button type='submit'><i class='fa fa-search'></i></button> -->   
                    <input id='findInput' type='text' placeholder='Hledat ..🤡' autocomplete='off'>
        <a class="login" href="login.php">Přihlásit</a>
        

        <div class="navbar">
            <a href="index.php">Home</a>
            <a href="about.php">About</a>
            <a href="contact.php">Contact</a>
            <a href="PridatOtazku.php">Add question</a>

            <div class="vyhledavani">
                <form action="">
                    <!--  <button type="submit"><i class="fa fa-search"></i></button> -->   
                    <input id="findInput" type="text" placeholder="Hledat ..🤡" autocomplete="off">
                </form>
            </div>
        </div>
    </div>