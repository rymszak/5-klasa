<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>przchodniia pogodna</title>
   <style>
    body{
        font-family: Georgia, 'Times New Roman', Times, serif;
    }
    img{
    width: 100%;
    }
    nav{
        width: 100%;
    }
    
    main{
        display: flex;
        width:100%
    }
    .left{
    width: 75%;
    }
    .right{
        width: 25%;
    }
    aside{display: flex;
        flex-direction:column;
        width: 100%;
    }
    
    .strona{
        padding: 20px;
        display:flex;
        justify-content: center;
        flex-direction:column;
        text-align:center;
    }
    button{
        width: 70px;
        height: 20px;
        text-align:center;
        border-style:none;
        background-color: #28a18d;
    }
   </style>
</head>
<body>
    <header>
        <section>
            <img src="logo.jpg" alt="logo">
        </section>
        <form action="logowanie.php" method="post">
        <button type="submit" name='submit'>login</button>
        </form>
   
    
    </header>
    <div class="strona">
    <main>
        <section>
            Nasza przychodnia 
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam, tempora nam veniam error suscipit aspernatur earum harum recusandae expedita similique laboriosam. Suscipit dicta quidem, exercitationem reiciendis temporibus nihil quia pariatur officia fuga eum enim, illum repellendus porro nulla impedit unde nesciunt corrupti velit, nostrum est ullam aliquam quo saepe repellat.</p>
        </section>
        <section>
            lokalizacja naszych przychodni
            
                <p>
                przychodnia słoneczko ul. Władysława Jagiełły 40 <br>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1833.9435099158445!2d18.5483475127312!3d50.1075125548055!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x471148d58daeb7a3%3A0x9c858eba2863b0d3!2zV8WCYWR5c8WCYXdhIEphZ2llxYLFgnkgNDAsIDQ0LTIwMCBSeWJuaWs!5e0!3m2!1spl!2spl!4v1732364076946!5m2!1spl!2spl" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </p>
                <p>przychodnia księżyc ul. Opawska 1 <br>  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2549.389824233744!2d18.66054947934569!3d50.284650740017106!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x471130e4ad6ed8ed%3A0x1ea29006ae7a663e!2sOpawska%201%2C%2044-100%20Gliwice!5e0!3m2!1spl!2spl!4v1732364102494!5m2!1spl!2spl" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </p>
        </section>
    </main>
    <aside>
        kontakt:
        <p>przychodnia słoneczko numer talefonu: <a href="tel:432-876-123">432-876-123</a></p>
        <p>przychodnia księżyc numer telefony: <a href="tel:634-111-542">634-111-542</a></p>
    </aside>
</div>
<footer>
    Dziękuję za wybranie naszej firmy
</footer>
</body>
</html>