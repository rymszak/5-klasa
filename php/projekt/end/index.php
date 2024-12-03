<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>przchodniia pogodna</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
    <div class="strona">
        
            <img src="logo.png" alt="logo" height="100px">
        <header>
        <nav class="baner">
            <button type="submit" id="main">strona główna</button>
        <?php
        if(isset($_COOKIE['admin'])){
            echo'<button type="submit" id="admin">zakładka administratora</button>';
        }
        if(isset($_COOKIE['lekarz'])){
            echo '<button type="submit" id="lek">zakładka lekarza</button>';
        }
        if(isset($_COOKIE['pacjent'])){
            echo '<button type="submit" id="pac">zakładka pacjenta</button>';
        }
        if(isset($_COOKIE['pracownik'])){
            echo  '<button id="praca">zakładka pracownika</button>'; 
        }
        if (isset($_COOKIE['logged'])) {
            echo '<form action="#" method="post">
            <button type="submit" name="log">wyloguj</button></form>';
            if (isset($_POST['log'])) {
                session_start();
                session_unset();
                session_destroy();
                    unset($_COOKIE['admin']);
                    unset($_COOKIE['lekarz']);
                    unset($_COOKIE['logged']);
                    unset($_COOKIE['pracownik']);
                    unset($_COOKIE['pacjent']);
                    setcookie('admin','',time()-3600,'/');
                    setcookie('lekarz', '', time() - 3600, '/');
                    setcookie('logged','',time()-3600,'/');
                    setcookie('pracownik','',time()-3600,'/');
                    setcookie('pacjent','',time()-3600,'/');
                    header('location:index.php');
   }
            }
        else{
            echo'
            <form action="logowanie.php" method="post">
            <button type="submit">Logowanie</button>
            </form>';
            
        }
        
        
        ?>
        
        
    </nav>
    
    </header>
    
    <main class="left">
        <section>
            Nasza przychodnia 
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste id saepe assumenda accusamus. Repellendus neque minima magnam dolores, placeat quaerat iste ipsa officia error a distinctio excepturi corporis sequi doloribus aperiam maiores, exercitationem voluptate in quam? Et odit commodi nemo porro voluptates. Necessitatibus, beatae sint. Cumque quidem ab molestiae dolore.</p>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quis, placeat.</p>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reiciendis sed provident, cumque quos voluptatem voluptatibus, exercitationem natus sequi a repudiandae ab autem fugiat consequatur blanditiis rem voluptates atque eaque sint?</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam, tempora nam veniam error suscipit aspernatur earum harum recusandae expedita similique laboriosam. Suscipit dicta quidem, exercitationem reiciendis temporibus nihil quia pariatur officia fuga eum enim, illum repellendus porro nulla impedit unde nesciunt corrupti velit, nostrum est ullam aliquam quo saepe repellat.</p>
        </section>
        <section class="right">
            lokalizacja naszych przychodni <br>
            
           <p>     
             przychodnia słoneczko ul. Władysława Jagiełły 40
             <br>
             <br>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1833.9435099158445!2d18.5483475127312!3d50.1075125548055!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x471148d58daeb7a3%3A0x9c858eba2863b0d3!2zV8WCYWR5c8WCYXdhIEphZ2llxYLFgnkgNDAsIDQ0LTIwMCBSeWJuaWs!5e0!3m2!1spl!2spl!4v1732364076946!5m2!1spl!2spl" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </p>    
               <p> przychodnia księżyc ul. Opawska 1 <br><br>  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2549.389824233744!2d18.66054947934569!3d50.284650740017106!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x471130e4ad6ed8ed%3A0x1ea29006ae7a663e!2sOpawska%201%2C%2044-100%20Gliwice!5e0!3m2!1spl!2spl!4v1732364102494!5m2!1spl!2spl" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
               </p>
        </section>
    </main>
    <aside>
        kontakt:
        <p>przychodnia słoneczko numer talefonu: <a href="tel:432-876-123">432-876-123</a> <br>adres e-mail <a href="mailto:PrzychodniaSloneczko@pogodna.pl">PrzychodniaSloneczko@pogodna.pl</a><br> godziny pracy 
        <table>
            <tr><th>pon</th><td>8:00-21:00</td></tr>
            <tr><th>wt</th><td>8:00-21:00</td></tr>
        <tr><th>śr</th> <td>8:00-21:00</td></tr>
    <tr><th>czw</th><td>8:00-21:00</td></tr>
<tr><th>pt</th> <td>8:00-21:00</td></tr>
<tr><th>sob</th> <td>10:00-21:00</td></tr>
<tr><th>niedź</th><td>12:00-20:00</td></tr> </table></p>
        <p>przychodnia księżyc numer telefony: <a href="tel:634-111-542">634-111-542</a><br> adres e-mail <a href="mailto:PrzychodniaKsiezyc@pogodna.pl">PrzychodniaKsiezyc@pogodna.pl</a><br><table>
            <tr><th>pon</th><td>8:00-21:00</td></tr>
            <tr><th>wt</th><td>8:00-21:00</td></tr>
        <tr><th>śr</th> <td>8:00-21:00</td></tr>
    <tr><th>czw</th><td>8:00-21:00</td></tr>
<tr><th>pt</th> <td>8:00-21:00</td></tr>
<tr><th>sob</th> <td>10:00-21:00</td></tr>
<tr><th>niedź</th><td>12:00-20:00</td></tr> </table></p>
    </aside>

<footer>
    Dziękuję za wybranie naszej firmy
</footer></div>
</body>



</html>
<script src="main.js" defer></script>
<script src="pacjent.js" defer></script>
<script src="pracownik.js" defer></script>
<script src="admin.js"></script>
<script src="lekarz.js"></script>