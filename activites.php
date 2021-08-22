<?php /* Template Name: soextreme-page-activitess */ ?>



<?php get_header();?>

<main>

      <section class="slider">
        <div id="carouselExampleIndicators" class="carousel slide my-carousel my-carousel" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active" style="background-image: url('<?php bloginfo('template_directory');?>/img//soufflerie1.jpg')">
              <div class="overlay-box"></div> <!-- the new div -->
              <div class="card-img-overlay d-flex align-items-center container">
                <div class="carousel-caption d-none d-md-block">
                  <img src="<?php bloginfo('template_directory');?>/img//picto-logo/logo-choisit-blanc.png" alt="">
                  <p class="p-slide">LE SPORT EXTRÊME ACCESSIBLE À TOUS</p>
                  <button type="button" class="btn btn-primary1 btn-lg" style="color: white;">CHUTE LIBRE EN SOUFFLERIE</button>
                </div>
              </div>
            </div>

            <div class="carousel-item" style="background-image: url('<?php bloginfo('template_directory');?>/img//rafting.jpg')">
              <div class="overlay-box"></div> <!-- the new div -->
              <div class="card-img-overlay d-flex align-items-center container">
                <div class="carousel-caption d-none d-md-block">
                  <img src="<?php bloginfo('template_directory');?>/img//picto-logo/logo-choisit-blanc.png" alt="">
                  <p class="p-slide">LE SPORT EXTRÊME ACCESSIBLE À TOUS</p>
                  <button type="button" class="btn btn-primary1 btn-lg" style="color: white;">CANYONING</button>
                </div>
              </div>
            </div>

            <div class="carousel-item" style="background-image: url('<?php bloginfo('template_directory');?>/img//slide\ image3.jpg')">
              <div class="overlay-box"></div> <!-- the new div -->
              <div class="card-img-overlay d-flex align-items-center container">
                <div class="carousel-caption d-none d-md-block">
                  <img src="<?php bloginfo('template_directory');?>/img//picto-logo/logo-choisit-blanc.png" alt="">
                  <p class="p-slide">LE SPORT EXTRÊME ACCESSIBLE À TOUS</p>
                  <button type="button" class="btn btn-primary1 btn-lg" style="color: white;">SAUT À L'ÉLASTIQUE</button>
                </div>
              </div>
            </div>

            

          </div>

          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </section>

<!-- NOS ACTIVITES START -->
      <section class="activities">
        <h2 class="text-center activites focus-in-contract-bck py-5">NOS ACTIVITÉS</h2>
        <div class="card-deck">
          <div class="card text-center" style="width: 18rem;">
            <div class="card-body rafting">
              <h5 class="card-title">RAFTING</h5>
              <a href="rafting.html" class="btn btn-primary">Réservez</a>
            </div>
          </div>
          <div class="card text-center" style="width: 18rem;">
            <div class="card-body canooing">
              <h5 class="card-title">CANYONING</h5>
              <a href="canyoning.html" class="btn btn-primary">Réservez</a>
            </div>
          </div>
          <div class="card text-center" style="width: 18rem;">
            <div class="card-body parachute">
              <h5 class="card-title">SAUT EN PARACHUTE</h5>
              <a href="saut-parachute.html" class="btn btn-primary">Réservez</a>
            </div>
          </div>
          <div class="card text-center" style="width: 18rem;">
            <div class="card-body soufflerie">
              <h5 class="card-title">SOUFFLERIE</h5>
              <a href="soufflerie.html" class="btn btn-primary">Réservez</a>
            </div>
          </div>
          <div class="card text-center" style="width: 18rem;">
            <div class="card-body saut-elastique">
              <h5 class="card-title">SAUT À L’ÉLASTIQUE</h5>
              <a href="saut-elastique.html" class="btn btn-primary">Réservez</a>
            </div>
          </div>
        </div>
      </section>
      <!-- NOS OFFRES END -->


      <!-- NOS OFFRES START -->
      <section class="offres ">
        <h2 class="text-center py-5">NOS OFFRES</h2>
        <div class="container">
          <div class="row text-center">
            <div class="column">
              <img class="mb-5" src="<?php bloginfo('template_directory');?>/img//picto-logo/picto1.png" alt="Snow" style="width:65%">
              <a href="#" class="btn btn-primary">Découvrir l'offre</a>
            </div>
            <div class="column">
              <img class="mb-5" src="<?php bloginfo('template_directory');?>/img//picto-logo/picto2.png" alt="Forest" style="width:65%">
              <a href="#" class="btn btn-primary">Découvrir l'offre</a>
            </div>
            <div class="column">
              <img class="mb-5" src="<?php bloginfo('template_directory');?>/img//picto-logo/picto3.png" alt="Mountains" style="width:65%">
              <a href="#" class="btn btn-primary">Découvrir l'offre</a>
            </div>
          </div>
        </div>
      </section>
      <!-- NOS OFFRES END -->

      <!-- A PROPOS DE NOUS START -->
      <section class="propos">
        <h2 class="text-center py-5">À PROPOS DE NOUS</h2>

        <div class="jumbotron jumbotron-fluid py-5">
          <div class="container text-center">
            <h1 class="display-4 pb-4">SO EXTREME</h1>
            <p class="lead">So’Extrême situé dans les gorges du verdon est le spécialiste des sports extrêmes avec une
              multitude d’activités au meilleur prix et ouvert à tous.
              Situé à La Castellane dans les gorges du verdon, So’Extrême est le spécialiste des sports extrêmes pour
              tous proposant des activités nautiques et aériennes comme le Canoë et Kayak, le Rafting, le saut en
              parachute et le saut à l'élastique.
              Et en exclusivité dans les gorges du verdon, So’Extrême vous propose sa toute nouvelle attraction, la
              Chute libre en simulateur dans une soufflerie. Pratiquants débutants ou aguerris, les activités sont
              ouvertes à tous et vous êtes accueillis par des passionnés et des professionnels. Pratiquez votre sport
              favoris en toute sécurité avec So’Extrême.
              Il y aura forcément une activité parmi toutes celles que nous vous proposons, pour vous!
              .</p>
          </div>
        </div>
      </section>
      <!-- A PROPOS DE NOUS END -->

      <!-- NOS ENGAGEMENTS START -->
      <section class="engagements">
          <h2 class="text-center py-5">NOS ENGAGEMENTS</h2>
          <div class="card-group">
            <div class="card" style="margin-left:80px; margin-right:15px; ">
              <div class="card-body mb-4">
                <h5 class="card-title text-center text-uppercase">Satisfaction client</h5>
                <img class="pr-3 pb-5 mb-5" style="float: left;" src="<?php bloginfo('template_directory');?>/img//picto-logo/1.png" alt=""><p style="font-size: 20px;" class="card-text">Parce que nos clients quelle que soit leur situation sont au cœur de nos
                  préoccupations, nous faisons tout notre possible pour satisfaire et offrir le meilleur service et suivi
                  pour nos clients.</p>
              </div>
            </div>
            <div class="card " style="margin-right:20px;">
              <div class="card-body">
                <h5 class="card-title text-center text-uppercase">Responsabilité</h5>
                <img class="pr-3 pb-5 mb-5" style="float: left;" src="<?php bloginfo('template_directory');?>/img//picto-logo/2.png" alt=""><p style="font-size: 20px;" class="card-text ">SO’Extrême s’engage et prend ses responsabilités en garantissant la qualité du matériel mis à disposition de nos clients
                  pour des expériences en sécurité.</p>
              </div>
            </div>
            <div class="card" style="margin-right:80px;">
              <div class="card-body">
                <h5 class="card-title text-center text-uppercase">Passion</h5>
                <img class="pr-3 pb-5 mb-5" style="float: left;" src="<?php bloginfo('template_directory');?>/img//picto-logo/3.png" alt=""><p style="font-size: 20px;" class="card-text ">Parce que nous pratiquons ce métier par passion, ce qui nous permet de
                  travailler un peu plus chaque jour pour proposer les meilleures expériences au meilleur prix.</p>
              </div>
            </div>
          </div>
        </section>
        <!-- NOS ENGAGEMENTS END -->



    </main>


  <?php get_footer();?>
