<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->

    <link href="https://fonts.googleapis.com/css?family=B612+Mono|Cuprum|Lato&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/fontello/css/fontello.css">

   
    <link rel="stylesheet" href="../css/header.css" type="text/css">
    <link rel="stylesheet" href="../css/contact.css" type="text/css">

    <title>Kamil Buczyński</title>
</head>
    <body>
       <div id="overlay">
        
         <a href="../index.php"><header class="name">
            <div id="imie">//Kamil</div>
            <div id="nazwisko">Buczyński</div>
            <div class="blink">_</div>
            <div id="clear"></div>
        </header></a>
        
        
        <div class="container">  
  <form id="contact" action="skrypt.php" method="post">
    <h3>Contact me</h3>
    <fieldset>
      <input name="name" placeholder="Your name" type="text"  tabindex="1" required autofocus>
    </fieldset>
    <fieldset>
      <input name="email" placeholder="Your Email Address" type="email" tabindex="2" required>
    </fieldset>
    <fieldset>
      <input name="phone" placeholder="Your Phone Number (optional)" type="tel" tabindex="3" required>
    </fieldset>
    <fieldset>
      <input name="thema" placeholder="Message Subject" type="text" tabindex="4" required>
    </fieldset>
    <fieldset>
      <textarea name="content" placeholder="Type your message here...." tabindex="5" required></textarea>
    </fieldset>
    <fieldset>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
    </fieldset>
    <p class="copyright"><a href="../index.php"  title="kamilbuczynski.pl">Back to main page</a></p>
  </form>
</div>
       
            
</div>
</body>

</html>