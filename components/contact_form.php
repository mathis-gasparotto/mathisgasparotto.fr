<?php
use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\Exception;
// use PHPMailer\PHPMailer\SMTP;

require ( ROOT . 'modules/PHPMailer/src/PHPMailer.php' );
// require ( ROOT . 'modules/PHPMailer/src/Exception.php' );
// require ( ROOT . 'modules/PHPMailer/src/SMTP.php' );

$phpmailer = new PHPMailer();
$phpmailer->setLanguage('fr');
$phpmailer->CharSet = 'UTF-8';

$errors = [];
if (!empty($_POST)) {
  $lname = $_POST['lname'];
  $fname = $_POST['fname'];
  $email = $_POST['email'];
  $message = $_POST['message'];
  if (empty($lname)) {
    $errors['lname'] = 'Le nom est requis';
  }
  if (empty($fname)) {
    $errors['fname'] = 'Le prénom est requis';
  }
  if (empty($email)) {
    $errors['email'] = 'L\'adresse mail est requis';
  } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors['email'] = 'L\'adresse mail est invalide';
  }
  if (empty($message)) {
    $errors['message'] = 'Un message est requis';
  }
  if (empty($errors)) {
    
    $phpmailer->From       = trim($_POST["email"]);
    $phpmailer->FromName   = trim($_POST["fname"]) . " " . trim($_POST["lname"]);
    
    $phpmailer->AddAddress('mathis.gasparotto@hotmail.com', 'Mathis Gasparotto');
    
    $phpmailer->Subject    =  "Nouveau message de " . trim($_POST["fname"]) . " " . trim($_POST["lname"]) . " (from mathisgasparotto.fr)";
    $phpmailer->WordWrap   = 50;
    $phpmailer->IsHTML(true);
    $phpmailer->MsgHTML('
    <div><b>Nom : </b>'.$_POST["lname"].'</div>
    <div><b>Prénom : </b>'.$_POST["fname"].'</div>
    <div><b>Email : </b><a href="mailto:'.$_POST["email"].'">'.$_POST["email"].'</a></div>
    <div><b>Message :</b></div>
    <div><p style="margin:0;">'.$_POST["message"].'</p></div>
    ');
    $phpmailer->AltBody = $_POST["message"];
    
    if (!$phpmailer->send()) {
      $sendError = $phpmailer->ErrorInfo;
    } else{
      $sendSuccess = 'Message bien envoyé';
    }
  }
} ?>

<section class="section contact-form bg-secondary" id="contact-form">
  <div class="container">
    <div class="title-container">
      <h2 class="title">Envoyez-moi un message</h2>
    </div>
    <div class="form-container">
      <form method="POST" class="form" action="/contact/">
        <?php if (isset($sendSuccess) && $sendSuccess) { ?>
          <div class="alert alert-success send-info"><?php echo $sendSuccess; ?></div>
        <?php } ?>
        <?php if (isset($sendError) && $sendError) { ?>
          <div class="alert alert-danger send-infos"><?php echo $sendError; ?></div>
        <?php } ?>
        <div class="input-container">
          <label for="lname" class="required">Nom</label>
          <input class="<?php echo((!empty($errors['lname'])) ? 'is-invalid' : '') ?>" type="text" id="lname" name="lname" placeholder="Votre nom" />
          <?php if(isset($errors['lname'])){ ?>
            <div class="invalid-feedback"><?php echo $errors['lname']; ?></div>
          <?php } ?>
        </div>
        <div class="input-container">
          <label for="fname" class="required">Prénom</label>
          <input class="<?php echo((!empty($errors['fname'])) ? 'is-invalid' : '') ?>" type="text" id="fname" name="fname" placeholder="Votre prénom" />
          <?php if(isset($errors['fname'])){ ?>
            <div class="invalid-feedback"><?php echo $errors['fname']; ?></div>
          <?php } ?>
        </div>
        <div class="input-container">
          <label for="email" class="required">Email</label>
          <input class="<?php echo((!empty($errors['email'])) ? 'is-invalid' : '') ?>" type="text" id="email" name="email" placeholder="Adresse Email" />
          <?php if(isset($errors['email'])){ ?>
            <div class="invalid-feedback"><?php echo $errors['email']; ?></div>
          <?php } ?>
        </div>
        <div class="input-container">
          <label for="message" class="required">Message</label>
          <textarea class="<?php echo((!empty($errors['message'])) ? 'is-invalid' : '') ?>" name="message" id="message" cols="30" rows="10" placeholder="Indiquez votre message ici"></textarea>
          <?php if(isset($errors['message'])){ ?>
            <div class="invalid-feedback"><?php echo $errors['message']; ?></div>
          <?php } ?>
        </div>
        <input type="submit" class="btn btn-primary" value="Envoyer" />
      </form>
    </div>
  </div>
</section>
