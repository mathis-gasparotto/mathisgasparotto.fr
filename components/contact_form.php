<?php
use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\Exception;
// use PHPMailer\PHPMailer\SMTP;

require ( ROOT . 'vendor/phpmailer/phpmailer/src/PHPMailer.php' );
// require ( ROOT . 'vendor/phpmailer/phpmailer/src/Exception.php' );
// require ( ROOT . 'vendor/phpmailer/phpmailer/src/SMTP.php' );

$phpmailer = new PHPMailer(true);

$errors = [];
if (!empty($_POST)) {
  $lname = trim($_POST['lname']);
  $fname = trim($_POST['fname']);
  $email = trim($_POST['email']);
  $subject = trim($_POST['subject']);
  $message = trim($_POST['message']);
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
  if (empty($subject)) {
    $errors['subject'] = 'L\'objet est requis';
  }
  if (empty($message)) {
    $errors['message'] = 'Un message est requis';
  }
  if (empty($errors)) {
    
    $phpmailer->setFrom('no-reply@mathisgasparotto.fr', $fname . " " . $lname);

    $phpmailer->AddReplyTo($email, $fname . " " . $lname);
    
    $phpmailer->AddAddress('mathis.gasparotto@hotmail.com', 'Mathis Gasparotto');
    
    $phpmailer->Subject    =  $subject . " - " . $fname . " " . $lname . " (from mathisgasparotto.fr)";
    $phpmailer->WordWrap   = 50;
    $phpmailer->IsHTML(true);
    $phpmailer->MsgHTML('
    <div><b>Nom : </b>'.$lname.'</div>
    <div><b>Pr&eacute;nom : </b>'.$fname.'</div>
    <div><b>Email : </b><a href="mailto:'.$email.'">'.$email.'</a></div>
    <div><b>Objet : </b>'.$subject.'</div>
    <div><b>Message :</b></div>
    <div><p style="margin:0;">'. preg_replace("/\r\n|\r|\n/", '</p><p>', $message) .'</p></div>
    ');
    $phpmailer->AltBody = $message;
    
    if (!$phpmailer->send()) {
      $sendError = $phpmailer->ErrorInfo;
    } else{
      $sendSuccess = 'Message bien envoyé';
      unset($_POST);
      header("Location: " . $_SERVER['PHP_SELF']);
    }
  }
} 
$disabled = false;
?>

<section class="section contact-form bg-secondary" id="contact-form">
  <div class="container">
    <div class="title-container">
      <h2 class="title">Envoyez-moi un message</h2>
    </div>
    <div class="form-container">
      <?php if ($disabled) { ?>
        <p class="form-disabled-msg">Formulaire de contact indisponible pour le moment</p>
      <?php } ?>
      <form method="POST" class="form desktop d-none d-lg-flex" action="/contact/">
        <?php if (isset($sendSuccess) && $sendSuccess) { ?>
          <div class="alert alert-success send-info"><?php echo $sendSuccess; ?></div>
        <?php } ?>
        <?php if (isset($sendError) && $sendError) { ?>
          <div class="alert alert-danger send-infos"><?php echo $sendError; ?></div>
        <?php } ?>
        <div class="input-container">
          <label for="lname" class="required">Nom</label>
          <input <?php if ($disabled) echo 'disabled' ?> class="<?php echo((!empty($errors['lname'])) ? 'is-invalid' : '') ?>" type="text" id="lname" name="lname" placeholder="Votre nom" />
          <?php if(isset($errors['lname'])){ ?>
            <div class="invalid-feedback"><?php echo $errors['lname']; ?></div>
          <?php } ?>
        </div>
        <div class="input-container">
          <label for="fname" class="required">Prénom</label>
          <input <?php if ($disabled) echo 'disabled' ?> class="<?php echo((!empty($errors['fname'])) ? 'is-invalid' : '') ?>" type="text" id="fname" name="fname" placeholder="Votre prénom" />
          <?php if(isset($errors['fname'])){ ?>
            <div class="invalid-feedback"><?php echo $errors['fname']; ?></div>
          <?php } ?>
        </div>
        <div class="input-container">
          <label for="email" class="required">Email</label>
          <input <?php if ($disabled) echo 'disabled' ?> class="<?php echo((!empty($errors['email'])) ? 'is-invalid' : '') ?>" type="email" id="email" name="email" placeholder="Adresse Email" />
          <?php if(isset($errors['email'])){ ?>
            <div class="invalid-feedback"><?php echo $errors['email']; ?></div>
          <?php } ?>
        </div>
        <div class="input-container">
          <label for="subject" class="required">Objet</label>
          <input <?php if ($disabled) echo 'disabled' ?> class="<?php echo((!empty($errors['subject'])) ? 'is-invalid' : '') ?>" type="text" id="subject" name="subject" placeholder="Objet de votre message..." />
          <?php if(isset($errors['subject'])){ ?>
            <div class="invalid-feedback"><?php echo $errors['subject']; ?></div>
          <?php } ?>
        </div>
        <div class="input-container">
          <label for="message" class="required">Message</label>
          <textarea <?php if ($disabled) echo 'disabled' ?> class="<?php echo((!empty($errors['message'])) ? 'is-invalid' : '') ?>" name="message" id="message" cols="30" rows="10" placeholder="Indiquez votre message ici"></textarea>
          <?php if(isset($errors['message'])){ ?>
            <div class="invalid-feedback"><?php echo $errors['message']; ?></div>
          <?php } ?>
        </div>
        <input <?php if ($disabled) echo 'disabled' ?> type="submit" class="btn btn-primary <?php if ($disabled) echo 'disabled' ?>" value="Envoyer" />
      </form>
      <form method="POST" class="form mobile d-flex d-lg-none" action="/#contact-form">
        <?php if (isset($sendSuccess) && $sendSuccess) { ?>
          <div class="alert alert-success send-info"><?php echo $sendSuccess; ?></div>
        <?php } ?>
        <?php if (isset($sendError) && $sendError) { ?>
          <div class="alert alert-danger send-infos"><?php echo $sendError; ?></div>
        <?php } ?>
        <div class="input-container">
          <label for="lname" class="required">Nom</label>
          <input <?php if ($disabled) echo 'disabled' ?> class="<?php echo((!empty($errors['lname'])) ? 'is-invalid' : '') ?>" type="text" id="lname" name="lname" placeholder="Votre nom" />
          <?php if(isset($errors['lname'])){ ?>
            <div class="invalid-feedback"><?php echo $errors['lname']; ?></div>
          <?php } ?>
        </div>
        <div class="input-container">
          <label for="fname" class="required">Prénom</label>
          <input <?php if ($disabled) echo 'disabled' ?> class="<?php echo((!empty($errors['fname'])) ? 'is-invalid' : '') ?>" type="text" id="fname" name="fname" placeholder="Votre prénom" />
          <?php if(isset($errors['fname'])){ ?>
            <div class="invalid-feedback"><?php echo $errors['fname']; ?></div>
          <?php } ?>
        </div>
        <div class="input-container">
          <label for="email" class="required">Email</label>
          <input <?php if ($disabled) echo 'disabled' ?> class="<?php echo((!empty($errors['email'])) ? 'is-invalid' : '') ?>" type="email" id="email" name="email" placeholder="Adresse Email" />
          <?php if(isset($errors['email'])){ ?>
            <div class="invalid-feedback"><?php echo $errors['email']; ?></div>
          <?php } ?>
        </div>
        <div class="input-container">
          <label for="subject" class="required">Objet</label>
          <input <?php if ($disabled) echo 'disabled' ?> class="<?php echo((!empty($errors['subject'])) ? 'is-invalid' : '') ?>" type="text" id="subject" name="subject" placeholder="Objet de votre message..." />
          <?php if(isset($errors['subject'])){ ?>
            <div class="invalid-feedback"><?php echo $errors['subject']; ?></div>
          <?php } ?>
        </div>
        <div class="input-container">
          <label for="message" class="required">Message</label>
          <textarea <?php if ($disabled) echo 'disabled' ?> class="<?php echo((!empty($errors['message'])) ? 'is-invalid' : '') ?>" name="message" id="message" cols="30" rows="10" placeholder="Indiquez votre message ici"></textarea>
          <?php if(isset($errors['message'])){ ?>
            <div class="invalid-feedback"><?php echo $errors['message']; ?></div>
          <?php } ?>
        </div>
        <input <?php if ($disabled) echo 'disabled' ?> type="submit" class="btn btn-primary <?php if ($disabled) echo 'disabled' ?>" value="Envoyer" />
      </form>
    </div>
  </div>
</section>
