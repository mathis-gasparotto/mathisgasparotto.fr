<?php
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
  /*if (empty($errors)) {
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;
    require ( ROOT . 'modules/PHPMailer/src/Exception.php' );
    require ( ROOT . 'modules/PHPMailer/src/PHPMailer.php' );
    require ( ROOT . 'modules/PHPMailer/src/SMTP.php' );
    $phpmailer = new PHPMailer();
    $phpmailer->isSMTP();
    $phpmailer->Host = 'smtp.mailtrap.io';
    $phpmailer->SMTPAuth = true;
    $phpmailer->Port = 2525;
    $phpmailer->Username = '47dc1a0de906cc';
    $phpmailer->Password = 'dafb407818f5ff';
    $toEmail = 'example@example.com';
    $emailSubject = 'Nouveau message de contact du site mathisgasparotto.fr';
    $headers = ['From' => $email, 'Reply-To' => $email, 'Content-type' => 'text/html; charset=iso-8859-1'];
    $bodyParagraphs = ["Prénom: {$fname}", "Nom: {$lname}", "Email: {$email}", "Message:", $message];
    $body = join(PHP_EOL, $bodyParagraphs);
    if (mail($toEmail, $emailSubject, $body, $headers)) {
        header('Location: thank-you.html');
    } else {
        $errorMessage = 'Quelque chose s\'est mal déroulé. Veuillez réessayer.';
    }
  }*/
} ?>

<section class="section contact-form bg-secondary">
  <div class="container">
    <div class="title-container">
      <h2 class="title">Envoyez-moi un message</h2>
    </div>
    <div class="form-container">
      <form method="POST" class="form">
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
