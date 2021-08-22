<?php /* Template Name: soextreme-page-rafting */ ?>


<?php get_header();?>

<main>
      <!-- JUMBOTRON PAGE HEADER -->
      <div class="jumbotron jumbotron-fluid jumbotron-special">
        <h1 class="display-3 font-weight-bold background ml-5" style="color: white;">RAFTING</h1>
        <div class="">
          <ul class="pl-5 breadcrumbs">
            <a href="http://f2i-cp21-sm-dt-ag-gs.online"><li style="color: lightgray;">Accueil</li> <i class="fa fa-play px-1"></i></a>
            <a href="http://f2i-cp21-sm-dt-ag-gs.online"><li style="color: lightgray;">Activités</li> <i class="fa fa-play px-1"></i></a>
            <a href="http://f2i-cp21-sm-dt-ag-gs.online/activites-sports-extreme-verdon/rafting/"><li style="color: white;">RAFTING</li></a>
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
          <h2 class="text-center pb-5 font-weight-bold" style="font-size:40px; color: #fc3218;"><img
              src="<?php bloginfo('template_directory');?>/img/picto-logo/rafting.png" alt="">Rafting</h2>
        </div>
        <div class="primary-infos w-75 mx-auto">
          <div class="item-location">
            <i class="fa fa-map-marker fa-fw">
            </i> Castellane
          </div>
          <div class="item-people text-right">
            <i class="fa fa-users fa-fw">
            </i> 4 à 24 personnes
          </div>
        </div>

        <p class="text-center pt-4"><b>Tarifs</b>: Session de printemps et automne</p>

        <hr width="30" class="py-2">

        <div class="activity-info w-50 mx-auto">

          <span class="float-right font-weight-bold">50€</span>
          <p>Solo</p>
          <span class="float-right font-weight-bold">40€</span>
          <p>Famille (jusqu'à 8)</p>
          <span class="float-right font-weight-bold">45€</span>
          <p>Groupe (jusqu'à 10)</p>

        </div>

        <div>
          <h2 class="py-4" style="color: #fc3218;">L'activité</h2>
          <div>
            <p><i><b>Au programme</b></i> : Découverte du maniement de la pagaie, du travail collectif à bord du
              raft, de l'application des consignes de sécurité, etc. Passages de quelques rapides, découverte de la
              faune et la flore du Verdon. Jeux à bord du bateau.&nbsp;</p>
            <p><i><b>Parcours</b></i> : De Castellane à Chasteuil, durée d'environ 1h30 et jusqu’à 2h30 pour une pratique plus sportive (selon niveau d'eau). Avec une vue sur les ruines du vieux Castellane, les fameuses Cadières de Brandis et passage du beau rapide de la Barre Saint Jean. &nbsp;</p>
            <p><b><i>Public</i></b> : Ce parcours est adapté aux familles avec des jeunes enfants (dès l'âge de 7 ans), et à un public novice ou sportif.</p>
            <p><br></p>
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
                     min="09:00" max="17:00" value="09:00" required>
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
  <h3 class="pb-5 font-weight-bold text-center" style="font-size: 40px; color: #fc3218;"><img
      src="<?php bloginfo('template_directory');?>/img/picto-logo/bien-a-savoir-removebg-preview.png" alt="">Bon à savoir</h3>
  
  <div class="blocktext">
  <p style="font-size: 20px;">- Encadrement par un guide diplômé.</p>
  <p style="font-size: 20px;">- Matériel aux normes européennes : combinaison, gilet, casque.</p>
  <p style="font-size: 20px;">- Transport retour au point de départ.&nbsp;</p>
  <p style="font-size: 20px;">- Le rafting se pratique les jours d'ouverture du <b>barrage géré par EDF</b> :&nbsp;</p>
  <p style="font-size: 20px;">- Si le barrage venait à être fermé le jour de votre venue, deux solutions s'offrent à vous</p>
  <p style="font-size: 20px;">- Décaler à une date ultérieure</p>
  <p style="font-size: 20px;">- Remplacer l'activité rafting par la fameuse randonnée aquatique (au coeur du Grand Canyon du Verdon !).
  </p>
  </p>
  <p style="font-size: 20px;">Pensez à votre <b>maillot de bain</b> (à porter sur vous) et vos <b>baskets</b> !</p>
</div>
</div>



</div>

  <?php get_footer();?>
