<?php /* Template Name: soextreme-page-contact */ ?>



<?php get_header();?>

<main>

<div class="contact-heading pt-5">
  <h1 style="font-size: 55px; ">
    CONTACT
  </h1>
</div>
<div class="container">
  <div class="row row1">
    <div class="col-sm-7 pt-2 pb-1">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4888.148477663075!2d6.047816574229095!3d44.53092286160991!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12cb157e953bce27%3A0xb0656d09ead1c78f!2sN85!5e0!3m2!1sen!2sfr!4v1608048367181!5m2!1sen!2sfr" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>

    <div class="col-sm-4 whitebox" id="contact2">
      <h3 style="margin-top: 25px;">Une question ?</h3>
      <hr align="left" width="70%">
      <h4 class="pt-2" style="font-size: 18px;">Veuillez remplir le formlulaire <br> et nous vous répondons sous <br>24 heures. </h4>
      <br>
      <br>
      <i class="fa fa-phone" style="color:#000"></i> <span>Téléphone:</span> <a href="">+33 04 76 95 23 21</a><br>
      <i class="fa fa-home" style="color:#000"></i> <span>Address:</span> <a href="">Route de Napoléon, CASTELLANE, 04120</a><br>
    </div>
  </div>
</div>

<div class="container">
  <!-- Extended default form grid -->
  <form>
    <div class="form-row">
      <div class="form-group col-md-6">
      <label for="exampleInputEmail1">Nom</label>
        <input type="text" class="form-control" required>
      </div>
      <div class="form-group col-md-6">
      <label for="exampleInputEmail1">Prénom</label>
        <input type="text" class="form-control" required>
      </div>
      <div class="form-group col-md-6">
        <label for="exampleInputEmail1">Email</label>
        <input type="email" class="form-control" id="inputEmail4"  required>
      </div>
      <div class="form-group col-md-6">
        <label for="exampleInputEmail1">Téléphone</label>
        <input class="form-control" type="tel" id="example-tel-input"  required>
      </div>
      <div class="form-group col-md-12">
        <label for="exampleInputEmail1">Message</label>
        <textarea class="form-control" id="exampleTextarea" rows="3" required></textarea>
      </div>
      <button type="submit" class="btn-lg btn-primary" required>Envoyer</button>
    </div>
  </form>
  <!-- Extended default form grid -->
</div>
</main>


  <?php get_footer();?>
