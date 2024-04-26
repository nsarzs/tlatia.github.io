<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto | Tlatia</title>
    <link rel="stylesheet" href="../styles.css">
    <link rel="stylesheet" href="contact.css">
    <script src="../script.js" defer></script>
</head>
<body>
    <nav>
        <ul class="sidebar">
          <li onclick=hideSidebar()><a href="#"><svg xmlns="http://www.w3.org/2000/svg" height="26" viewBox="0 96 960 960" width="26"><path d="m249 849-42-42 231-231-231-231 42-42 231 231 231-231 42 42-231 231 231 231-42 42-231-231-231 231Z"/></svg></a></li>
          <li><a href="../index.html">Inicio</a></li>
          <li><a href="about-us.html">Sobre Nosotros</a></li>
          <li><a href="products.html">Productos</a></li>
          <li><a href="contact.html" class="active">Contacto</a></li>
        </ul>
        <ul>
          <li><a href="../index.html"><h1>TLATIA S.A</h1></a></li>
          <li class="hideOnMobile"><a href="/index.html">Inicio</a></li>
          <li class="hideOnMobile"><a href="about-us.html">Sobre Nosotros</a></li>
          <li class="hideOnMobile"><a href="products.html">Productos</a></li>
          <li class="hideOnMobile"><a href="contact.html" class="active">Contacto</a></li>
          <li class="menu-button" onclick=showSidebar()><a href="#"><svg xmlns="http://www.w3.org/2000/svg" height="26" viewBox="0 96 960 960" width="26"><path d="M120 816v-60h720v60H120Zm0-210v-60h720v60H120Zm0-210v-60h720v60H120Z"/></svg></a></li>
        </ul>
    </nav>
    <h1>Contacto</h1>
    <div id="wrapper">
        <h2>Formulario de contacto</h2>
        <form method="post">
            <input type="text" placeholder="name" name="name" required="">
            <input type="email" placeholder="email" name="email" required="">
            <input type="text" placeholder="asunto" name="asunto" required="">
            <textarea placeholder="mensaje" name="msg"></textarea>
            <input type="submit" value="Enviar" name="enviar">
        </form>
    </div>
    <?php
    include("send_email.php");
    ?>

    <footer>
        <div id="footer" class="footer-container">
            <div class="logo">
                <h2>TLATIA S.A</h2>
            </div>
            <div class="footer-nav">
                <ul>
                    <li><a href="/index.html">Inicio</a></li>
                    <li><a href="about-us.html">Sobre Nosotros</a></li>
                    <li><a href="products.html">Productos</a></li>
                    <li><a href="contact.html">Contacto</a></li>
                </ul>
            </div> 
        </div>
        <div class="footer-bottom">
            <p>Copyright &copy; 2024; Tlatia S.A; Designed by <span class="designer">Nazar Zemnukhov</span></p>
        </div>
    </footer>
</body>
</html>
