<?PHP
   $adresat = 'kamilb934@gmail.com';    // pod ten adres zostanie wysłana wiadomosc
   @$email = $_POST['email'];
   @$name = $_POST['name'];
   @$phone = $_POST['phone'];
   @$thema = $_POST['thema'];
   @$content = $_POST['content'];
   $header =    "From: kamilb934@gmail.com \nContent-Type:".
         ' text/plain;charset="UTF-8"'.
         "\nContent-Transfer-Encoding: 8bit";

    
    $allcontent="Imię: ".$name."\n\n"."Telefon: ".$phone."\n\n"."Temat: ".$thema."\n\n"."Wiadomość: ".$content;


   if (mail($adresat,$email,$allcontent,$header))
      echo "<script>alert('Wysłano.'); document.location.href='../index.php';</script>";
   else
      echo '<p><b>NIE</b> wysłano maila!</p>';
?>




