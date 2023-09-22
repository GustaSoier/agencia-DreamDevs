<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$ok = 0;

if (isset($_POST{'email'})){




//Load Composer's autoloader
require 'mailer/Exception.php';
require 'mailer/PHPMailer.php.';
require 'mailer/SMTP.php';


//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    /*$mail->SMTPDebug = SMTP::DEBUG_SERVER; */                    //Enable verbose debug output 
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.hostinger.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'webdequebrada@smpsistema.com.br';                     //SMTP username
    $mail->Password   = 'Senac@agencia01';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`



    //Recipients
    $mail->setFrom('webdequebrada@smpsistema.com.br', 'Site Agencia TIPI');
    $mail->addAddress('pereiravitoria0409@gmail.com');     //Add a recipient

/*  
    $mail->addAddress('ellen@example.com');               //Name is optional
    $mail->addReplyTo('info@example.com', 'Information');
    $mail->addCC('cc@example.com');
    $mail->addBCC('bcc@example.com');

    //Attachments
    $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    */

    //Content
   /* Dados do email */
    $nome = $_POST ['nome'];
    $email = $_POST ['email'];
    $tel = $_POST ['tel'];
    $mens = $_POST ['mens'];


    $mail->CharSet = 'UTF-8';
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Site agencia TIPI';
    $mail->Body    = "
    Nome: $nome <br>
    E-mail: $email <br>
    Telefone: $tel <br>
    Mensagem: $mens 


    ";
    $mail->AltBody = "
    Nome: $nome <br>
    E-mail: $email <br>
    Telefone: $tel <br>
    Mensagem: $mens 



    ";

    $mail->send();
    $ok = 1;
    /*echo 'Messagem enviada com sucesso';*/
} catch (Exception $e) {
  $ok = 2;
    /*echo "ERROOOO... Tente mais tarde: {$mail->ErrorInfo}";*/
}

}


?>







<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dream Devs</title>
  <link rel="stylesheet" href="css/resset.css">
  <link rel="stylesheet" href="css/slick.css">
  <link rel="stylesheet" href="css/slick-theme.css">



  <link rel="shortcut icon" href="img/DreamDevsll.png" type="image/x-icon">
<link rel="icon" href="img/DreamDevsll.png" type="image/x-icon">

<link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="manifest" href="/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link rel="stylesheet" href="css/estilo.css">
  
</head>
<body>
  <!--corpo da pagina -->
  <?php require_once  ('conteudo/topo.php');?>


<main>

<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3659.070808363369!2d-46.43204449326536!3d-23.49395892255817!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce63dda7be6fb9%3A0xa74e7d5a53104311!2sSenac%20S%C3%A3o%20Miguel%20Paulista!5e0!3m2!1spt-BR!2sbr!4v1687884216641!5m2!1spt-BR!2sbr" width="100%" height="700" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

    <section class="form">
        <div class="site">

        <h2>Formulario de contato</h2>
        <div>
          <form action="#" method="POST" id="formContato"> 
        <div>
          <input type="text" id="nome" name="nome" placeholder="informe seu nome:">
          <input type="email" id="email" name="email" required placeholder="informe seu e-mail:">
          <input type="tel" id="tel" name="tel" placeholder="informe seu telefone:">
          <h3>

          <?php
          if($ok == 1){
             echo $nome . ", sua mensagem foi enviada com sucesso!!!";
          } elseif ($ok == 2)
          echo $nome . ", erro ao enviar sua mensagem. Tente mais tarde";
         

          ?>
         </h3>
        </div>
        <div>
          <textarea name="mens" id="mens" cols="30" rows="10" placeholder="informe sua mensagem"></textarea>
          <div>
          <input type="submit" value="enviar via e-mail">
          <button onclick= "event.preventDefault(); formWhats()">Enviar via whatsapp</button>
          </div>

        </div>

          </form>
        </div>

        </div>

      </section>
      









<?php require_once  ('conteudo/rodape.php');?>











     
     
   </main>

  
  <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
  <script src="js/slick.js"></script>

  <script src="js/script.js"></script>
</body>
</html>