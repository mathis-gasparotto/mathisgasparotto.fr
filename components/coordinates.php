<?php 
$tel_url = 'tel:+33603336732';
$email_url = 'mailto:mathis.gasparotto@hotmail.com';
$linkedin_url = 'https://www.linkedin.com/in/mathis-gasparotto/';
?>

<section class="section coordinates bg-light" id="contact"> 
  <div class="container">
    <h2 class="section-title d-none">Mes coordonnées de contact</h2>
    <address class="wrapper">
      <div class="single-coordinate">
        <a href="<?php echo $email_url; ?>">
          <i class="fa fa-envelope icon"></i>
        </a>
        <span class="title">Email</span>
        <a href="<?php echo $email_url; ?>">
          <span class="text">mathis.gasparotto@hotmail.com</span>
        </a>
      </div>
      <div class="single-coordinate">
        <a href="<?php echo $linkedin_url; ?>" target="_blank">
          <i class="fa fa-linkedin-in icon"></i>
        </a>
        <span class="title">Linkedin</span>
        <a href="<?php echo $linkedin_url; ?>" target="_blank">
          <span class="text">Mathis GASPAROTTO</span>
        </a>
      </div>
    </address>
  </div>
</section>