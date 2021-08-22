<?php /* Template Name: soextreme-page-canyoning */ ?>



<?php get_header();?>

<main>
      <!-- JUMBOTRON PAGE HEADER -->
      <div class="jumbotron jumbotron-fluid jumbotron-special1">
        <h2 class="display-3 font-weight-bold background ml-5" style="color: white;">CANYONING</h2>
        <div class="">
          <ul class="pl-5 breadcrumbs">
            <a href="http://f2i-cp21-sm-dt-ag-gs.online"><li style="color: lightgray;">Accueil</li> <i class="fa fa-play px-1"></i></a>
            <a href="http://f2i-cp21-sm-dt-ag-gs.online"><li style="color: lightgray;">Activités</li> <i class="fa fa-play px-1"></i></a>
            <a href="http://f2i-cp21-sm-dt-ag-gs.online/activites-sports-extreme-verdon/canyoning/"><li style="color: white;">CANYONING</li></a>
          </ul>
          <p class="p-slide pl-5" style="color: white; font-size: 35px;">LE SPORT EXTRÊME <br>ACCESSIBLE À TOUS</p>
          <div class="pl-2">
            <ul class="hashtags">
              <li style="color: white;">#aventure</li>
              <li class="px-4" style="color: white;">#adrénaline</li>
              <li class="px-4" style="color: white;">#passion</li>
              <li class="px-3" style="color: white;">#vitesse</li>
            </ul>
          </div>
        </div>
      </div>
      </main>
<!-- JUMBOTRON PAGE HEADER -->

  </div> <!-- ENTIRE PAGE CONTAINER -->

  <div class="container">
  <div class="row ">
    <div class="col-md-6">
      
      <div class="a-content w-100 p-5" style="background-color: white;">
        <div class="activity-name">
          <h2 class="text-center pb-5 font-weight-bold" style="font-size:40px; color: #ff2f06;"><img
              src="<?php bloginfo('template_directory');?>/img/picto-logo/canyoning.png" alt="canyoning">Canyoning</h2>
        </div>
        <div class="primary-infos w-75 mx-auto">
          <div class="item-location">
            <i class="fa fa-map-marker fa-fw">
            </i> Verdon
          </div>
          <div class="item-people text-right">
            <i class="fa fa-users fa-fw">
            </i> 4 à 10 personnes
          </div>
        </div>

        <p class="text-center pt-4"><b>Tarifs</b>: Session de printemps et automne</p>

        <hr width="30" class="py-2">

        <div class="activity-info w-50 mx-auto">

        <span class="float-right font-weight-bold">50€</span>
              <p>Solo (Session Demi-journée)</p>
              <span class="float-right font-weight-bold">75€</span>
              <p>Solo (Session Journée)</p>

        </div>

        <div>
          <h2 class="py-4" style="color: #fc3218;">L'activité</h2>
          <div>
          <p><i><b>Au programme</b></i> : La descente du canyon consiste à suivre le fil de l’eau, en franchissant les obstacles que l’on rencontre. C’est dans un décor de rêve que nous allons vous faire découvrir, un endroit où règne une parfaite harmonie entre l’eau, la roche et le soleil. 

De la nage, des sauts, des décentes en rappel ainsi que de la marche. Le tout entouré de roches sculptées par l’érosion depuis des siècles. 
La pratique du canyoning est cependant un peu exigeante en termes de technique, d’efforts et équipement. Parce que l’activité se déroule dans un environnement sauvage, entourer d’eau et de montagnes pour cela les consignes de sécurité ne doivent en aucun cas être négligées. Il est impératif d’écouter et rester attentif aux consignes de votre guide.
La région du Verdon propose des parcours en canyoning pour tous les goûts et tous les niveaux de pratique. Les familles, débutants, sportifs et aventuriers, tous trouveront leur bonheur !!
&nbsp;</p>
          </div>
        </div>

      </div>
      
      
    </div>
    
  
      <div class="col-md-6">
      <div id="booking" class="section make-me-sticky">
      <a class="weatherwidget-io" href="https://forecast7.com/fr/43d856d51/castellane/" data-label_1="CASTELLANE" data-label_2="MÉTÉO" data-theme="clear" >CASTELLANE MÉTÉO</a>
        <div class="section-center ">
          <div class="container ">
            <div class="row">
              <div class="booking-form ">
                <form action="https://formspree.io/f/meqpvvla" method="POST">
                  <div class="row no-margin">
                    <div class="col-sm-12">
                      <div class="form-group">
                        <span class="form-label">Choisissez la date</span>
                        <input class="form-control" type="date" value="2021-08-00" min="2021-07-20" max="2021-12-31" name="date souhaitée de réservation" 
                        required >
                      </div>
                    </div>
                  </div>
                  <div class="row no-margin">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <span class="form-label">Adultes</span>
                        <select class="form-control" name="Nombres Adultes" required>
                              <option>0</option>
                          <option>1</option>
                          <option>2</option>
                          <option>3</option>
                          <option>4</option>
                          <option>5</option>
                          <option>6</option>
                          <option>7</option>
                          <option>8</option>
                          <option>9</option>
                        </select>
                        <span class="select-arrow"></span>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <span class="form-label">Enfants (moins de 12 ans)</span>
                        <select class="form-control" name="Nombres Enfants" required>
                            <option>0</option>
                          <option>1</option>
                          <option>2</option>
                          <option>3</option>
                          <option>4</option>
                          <option>5</option>
                          <option>6</option>
                          <option>7</option>
                          <option>8</option>
                          <option>9</option>
                        </select>
                        <span class="select-arrow"></span>
                      </div>
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <span class="form-label">L'heure</span>
                    <input style="background-color: white;
                        color: black;" type="time" id="appt" name="L'heure"
                     min="09:00" max="18:00" required>
                    <span class="select-arrow"></span>
                  </div>
                  
                  <div class="form-group">
                    <span class="form-label">Type d'offre</span>
                    <select class="form-control" name="Type d'offre" required>
                      <option value="" selected hidden>Sélectionnez le type d'offre</option>
                      <option>Solo à partir de 50 €</option>
                      <option>Famille à partir de 40 €</option>
                      <option>Groupe à partir de 45 €</option>
                    </select>
                    <span class="select-arrow"></span>
                  </div>
                   <div class="form-group">
                    <span class="form-label">Nom</span>
                    <input class="form-control" type="text" name="Nom" required>
                  </div>
                  <div class="form-group">
                    <span class="form-label">Prénom</span>
                    <input class="form-control" type="text" name="Prénom" required>
                  </div>
                  <div class="form-group">
                    <span class="form-label">Email</span>
                    <input class="form-control" type="email" name="_replyto" required>
                  </div>
                  <div class="form-group">
                    <span class="form-label">Téléphone</span>
                    <input class="form-control" type="tel" name="Téléphone">
                  </div>
                  <div class="form-btn">
          <div class="form-btn">
                    <button class="submit-btn">RÉSERVER MAINTENANT</button>
                  </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
</div>
</div>

<div class="activity-info w-100 p-5 mt-5 text-center" style="background-color: lightgray;">
  <h2 class="pb-5 font-weight-bold text-center" style="font-size: 40px; color: #fc3218;"><img
      src="<?php bloginfo('template_directory');?>/img/picto-logo/bien-a-savoir-removebg-preview.png" alt="bon-a-savoir">Bon à savoir</h2>
  
  <div class="blocktext">
  <p style="font-size: 20px;">- Encadrement par un guide diplômé BEES.</p>
  <p style="font-size: 20px;">- Matériel aux normes européennes : combinaison, baudrier, casque, cordes.</p>
  <p style="font-size: 20px;">- Les horaires et les lieux de rendez-vous varient en fonction des différents parcours qui eux même
              varient selon la saison.&nbsp;</p>
  <p style="font-size: 20px;"><b>A prévoir</b> : une bonne paire de chaussures, un maillot de bain, de l’eau, un pique-nique pour les
              canyons à la journée.</p>
</div>
</div>


</div>
  <?php get_footer();?>
