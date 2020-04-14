<html lang=”pl-PL”>
    <head>
        <meta charset="UTF-8">
        <title>Erplan Deweloper | Kontakt</title>
        
        <link rel="stylesheet" type="text/css" href="style3.css">
        <meta name="viewport"  charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="log/pclog1.png" type="image/x-icon" />
        <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
          
        <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans+Condensed:700|Montserrat&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/239c56f7d9.js" crossorigin="anonymous"></script>
        

    </head>

    </head>
        <body>
            <header>
                <a href="index.html">
                  <img class="logo" src="log/pclog1.png" alt="Logo Erplan Group">
                </a>
                  <nav>
                      <ul>  
                          <li><a href="index.html" class="active">Aktualności</a></li>
                          <li><a href="oferta.html">Oferta</a></li>
                          <li><a href="kontakt.php">Kontakt</a></li>
                          <li><a href="https://www.facebook.com/erplan.deweloper/"><i class="fab fa-facebook-f"></i></a></li>    
                      </ul>
                  </nav>
                  <div class="menu-toggle"><i id="bar" class="fas fa-bars"></i></div>
              </header>
           <h1>Kontakt<hr></h1>
          
               <h3>Formularz kontaktowy</h3>
               <div name="error_message"></div>
               <main>
                   <ul class="main">
                       <li class="section">
                            <form name="form" class="contact-form"  method="post">
                                <a>Imię i nazwisko (wymagane):<input type="text" name="name"></a>
                                <a>Twój e-mail (wymagane):<input type="text" name="email" ></a>
                                <a>Temat:<input type="text" name="subject"></a>
                                <a>Treść wiadomości:<textarea name="message"></textarea></a>
                                <button type="submit" name="submit">Wyślij</button>
                            </form>
                    </li>
                    <li class="section">
                <div class="description">
                    
                        <img src="act/port1.jpg">
                        <div class="box"><h4>Radosław Andrzejewski</h4><a>Prezes Erplan Group Sp. z o.o.</a></div>
                    <ul class="description-1">
                        <li>
                            <i class="fas fa-envelope-open-text"></i>
                            <p>Chcesz się z nami skontaktować? Napisz do nas maila, odpowiemy najszybciej jak to możliwe!</p>
                        </li>
                        <li>
                            <i class="fas fa-phone"></i>
                            <p>Lub zadzwoń do nas i od razu odpowiemy na Twoje pytania!</p>
                        </li>
                    </li>
                    </ul>
                </div>
            </ul>
           </main>
           <footer id="footer">
                <img class="lg" src="log/pclog1.png" alt="Logo Erplan Group">
                <div class="data">
                    <h4>ERPLAN GROUP Sp. z o.o.</h4>
                    <p>NIP:5542977604</br>
                    KRS:0000789489</br> 
                    REGON:383545406</br>
                    </p>
                </div>
                <div class="con">
                    <h4>KONTAKT</h4>
                    <a>Radosław Andrzejewski</a></br>
                            <a href="tel:+48 694 557 399"><i class="fas fa-phone-alt"></i>  +48 694 557 399</a></br>
                            <a>Dariusz Andrzejewski</a></br>
                            <a href="tel:+48 787 572 721"><i class="fas fa-phone-alt"></i>  +48 787 572 721</a></br></br>
                    <a href="mailto:biuro@erplandeweloper.pl"><i class="far fa-envelope"></i>  biuro@erplandeweloper.pl</a></br>
                    <a href="https://www.google.pl/maps/place/Olimpin+16A,+86-061+Olimpin/@53.0325871,17.9654036,17z/data=!3m1!4b1!4m5!3m4!1s0x47036c8574074303:0x33ac793290e00363!8m2!3d53.0325871!4d17.9675923"><i class="fas fa-map-marked-alt"></i> 86-061 Brzoza</a>
                </div>

            </footer>
            <script src="main3.js"></script>
            
        </body>
   
</html>
<?php

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $mailFrom = $_POST['email'];
    $message = $_POST['message'];
  if(!empty($name) && !empty($mailFrom) && !empty($message)) {
    if (filter_var($mailFrom, FILTER_VALIDATE_EMAIL)) {
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $mailFrom = $_POST['email'];
    $message = $_POST['message'];

    $mailTo = "biuro@erplandeweloper.pl";
    $headers = "Nowy e-mail od:  ".$name."  <".$mailFrom.">";
    $txt = "Temat:  ".$subject.".\n\n"."Treść:  ".$message;
    mail($mailTo, $subject, $txt, $headers);
    echo '
    <script type="text/javascript">
    alert("Wiadomość została wysłana.");
    </script>';
}
else {
    echo '
    <script type="text/javascript">
    alert("E-mail nieprawidłowy.");
    </script>';
}}
else { echo '
  <script type="text/javascript">
  alert("Uzupełnij wsyzstkie pola.");
  </script>';
}}
?>
