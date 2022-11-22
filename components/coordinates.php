<?php 
$tel_url = 'tel:+33603336732';
$email_url = 'mailto:mathis.gasparotto@hotmail.com';
$linkedin_url = 'https://www.linkedin.com/in/mathis-gasparotto/';
?>

<section class="section coordinates bg-light">
  <address class="container">
    <div class="single-coordinate">
      <a href="<?php echo $tel_url; ?>">
        <i class="fa fa-phone icon"></i>
      </a>
      <h3 class="title">Téléphone</h3>
      <a href="<?php echo $tel_url; ?>">
        <h4 class="text">06 03 33 67 32</h4>
      </a>
    </div>
    <div class="single-coordinate">
      <a href="<?php echo $email_url; ?>">
        <i class="fa fa-envelope icon"></i>
      </a>
      <h3 class="title">Email</h3>
      <a href="<?php echo $email_url; ?>">
        <h4 class="text">mathis.gasparotto@hotmail.com</h4>
      </a>
    </div>
    <div class="single-coordinate">
      <a href="<?php echo $linkedin_url; ?>" target="_blank">
        <i class="fa fa-linkedin-in icon"></i>
      </a>
      <h3 class="title">Linkedin</h3>
      <a href="<?php echo $linkedin_url; ?>" target="_blank">
        <h4 class="text">Mathis GASPAROTTO</h4>
      </a>
    </div>
  </address>
</section>