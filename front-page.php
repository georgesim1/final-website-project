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
            <div class="carousel-item active img-fluid" style="background-image: url('<?php bloginfo('template_directory');?>/img//soufflerie1.jpg')" alt="soufflerie">
              <div class="overlay-box"></div> <!-- the new div -->
              <div class="card-img-overlay d-flex align-items-center container">
                <div class="carousel-caption d-none d-md-block">
                  <img class="img-fluid" src="<?php bloginfo('template_directory');?>/img//picto-logo/logo-choisit-blanc.png" alt="logo">
                  <h1 class="p-slide">LE SPORT EXTRÊME ACCESSIBLE À TOUS</h1>
                  <a href="http://f2i-cp21-sm-dt-ag-gs.online/activites-sports-extreme-verdon/simulateur-de-chute-libre/"><button type="button" class="btn btn-primary1 btn-lg" style="color: white;"> <b>NOUVEAUTÉ !</b> <br>CHUTE LIBRE EN SOUFFLERIE</button></a>
                </div>
              </div>
            </div>

            <div class="carousel-item img-fluid" style="background-image: url('<?php bloginfo('template_directory');?>/img//rafting.jpg')" alt="rafting">
              <div class="overlay-box"></div> <!-- the new div -->
              <div class="card-img-overlay d-flex align-items-center container">
                <div class="carousel-caption d-none d-md-block">
                  <img class="img-fluid" src="<?php bloginfo('template_directory');?>/img//picto-logo/logo-choisit-blanc.png" alt="logo">
                  <h1 class="p-slide">LE SPORT EXTRÊME ACCESSIBLE À TOUS</h1>
                  <a href="http://f2i-cp21-sm-dt-ag-gs.online/activites-sports-extreme-verdon/canyoning/"><button type="button" class="btn btn-primary1 btn-lg" style="color: white;">CANYONING</button></a>
                </div>
              </div>
            </div>

            <div class="carousel-item img-fluid" style="background-image: url('<?php bloginfo('template_directory');?>/img//slide\ image3.jpg')" alt="saut-elastique" >
              <div class="overlay-box"></div> <!-- the new div -->
              <div class="card-img-overlay d-flex align-items-center container">
                <div class="carousel-caption d-none d-md-block">
                  <img class="img-fluid" src="<?php bloginfo('template_directory');?>/img//picto-logo/logo-choisit-blanc.png" alt="logo">
                  <h1 class="p-slide">LE SPORT EXTRÊME ACCESSIBLE À TOUS</h1>
                  <a href="http://f2i-cp21-sm-dt-ag-gs.online/activites-sports-extreme-verdon/saut-a-lelastique/"><button type="button" class="btn btn-primary1 btn-lg" style="color: white;">SAUT À L'ÉLASTIQUE</button></a>
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
      <section class="activities col-md-12">
        <h2 class="text-center activites focus-in-contract-bck py-5">NOS ACTIVITÉS</h2>
        <div class="card-deck">
          <div class="card text-center" style="width: 18rem;">
            <div class="card-body rafting d-flex flex-column">
             <h3 class="card-title rafting-text">RAFTING</h3>
              <a href="http://f2i-cp21-sm-dt-ag-gs.online/activites-sports-extreme-verdon/rafting/" class="btn-sm btn-primary mt-auto">Réserver</a>
            </div>
          </div>
          <div class="card text-center" style="width: 18rem;">
            <div class="card-body canooing d-flex flex-column">
              <h3 class="card-title canyoning-text">CANYONING</h3>
              <a href="http://f2i-cp21-sm-dt-ag-gs.online/activites-sports-extreme-verdon/canyoning/" class="btn-sm btn-primary mt-auto">Réserver</a>
            </div>
          </div>
          <div class="card text-center" style="width: 18rem;">
            <div class="card-body parachute d-flex flex-column">
              <h3 class="card-title ">SAUT EN PARACHUTE</h3>
              <a href="http://f2i-cp21-sm-dt-ag-gs.online/activites-sports-extreme-verdon/saut-en-parachute/" class="btn-sm btn-primary mt-auto">Réserver</a>
            </div>
          </div>
          <div class="card text-center" style="width: 18rem;">
            <div class="card-body soufflerie d-flex flex-column">
              <h3 class="card-title soufflerie-text ">SOUFFLERIE</h3>
              <a href="http://f2i-cp21-sm-dt-ag-gs.online/activites-sports-extreme-verdon/simulateur-de-chute-libre/" class="btn-sm btn-primary mt-auto">Réserver</a>
            </div>
          </div>
          <div class="card text-center" style="width: 18rem;">
            <div class="card-body saut-elastique d-flex flex-column">
              <h3 class="card-title saut-elastique-text">SAUT À L’ÉLASTIQUE</h3>
              <a href="http://f2i-cp21-sm-dt-ag-gs.online/activites-sports-extreme-verdon/saut-a-lelastique/" class="btn-sm btn-primary mt-auto">Réserver</a>
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
              <img class="mb-5" src="<?php bloginfo('template_directory');?>/img//picto-logo/picto1.png" alt="solo " style="width:65%">
              <a href="http://f2i-cp21-sm-dt-ag-gs.online/offres/offre-solo/" class="btn btn-primary">Découvrir l'offre</a>
            </div>
            <div class="column">
              <img class="mb-5" src="<?php bloginfo('template_directory');?>/img//picto-logo/picto2.png" alt="groupe" style="width:65%">
              <a href="http://f2i-cp21-sm-dt-ag-gs.online/offres/offre-groupe/" class="btn btn-primary">Découvrir l'offre</a>
            </div>
            <div class="column">
              <img class="mb-5" src="<?php bloginfo('template_directory');?>/img//picto-logo/picto3.png" alt="famille" style="width:65%">
              <a href="http://f2i-cp21-sm-dt-ag-gs.online/offres/offre-famille/" class="btn btn-primary">Découvrir l'offre</a>
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
            <h2 class="display-4 pb-4">So’Extrême</h2 >
            <p class="lead">Situé à la Castellane dans les Gorges du Verdon, So’Extrême est le spécialiste des sports extrêmes pour tous. Proposant des activités nautiques et aériennes comme le rafting, le saut en parachute et le saut à l'élastique, et en exclusivité dans les Gorges du Verdon, So’Extrême vous propose sa toute nouvelle attraction, la simulation en chute libre pour pratiquants débutants ou aguerris. Les activités sont ouvertes à tout type de public. Vous serez accueillis par des professionnels du métier pour une pratique de sport extrême en toute sécurité avec So’Extrême. Il y aura forcément une activité parmi toutes celles que nous vous proposons, pour vous !
          </div>
        </div>
      </section>
      <!-- A PROPOS DE NOUS END -->

      <!-- NOS ENGAGEMENTS START -->
      <section class="engagements">
          <h2 class="text-center py-5">NOS ENGAGEMENTS</h2>
          <div class="card-group">
            <div class="card" style="margin-left:20px; margin-right:20px; ">
              <div class="card-body mb-4">
                <h3 class="card-title text-center text-uppercase">Satisfaction client</h3>
                <img class="pr-3 pb-5 mb-5" style="float: left;" src="<?php bloginfo('template_directory');?>/img//picto-logo/1.png" alt="numéro1"><p style="font-size: 20px;" class="card-text">Parce que nos clients quelle que soit leur situation sont au cœur de nos
                  préoccupations, nous faisons tout notre possible pour satisfaire et offrir le meilleur service et suivi
                  pour nos clients.</p>
              </div>
            </div>
            <div class="card " style="margin-left:20px; margin-right:20px;">
              <div class="card-body">
                <h3 class="card-title text-center text-uppercase">Responsabilité</h3>
                <img class="pr-3 pb-5 mb-5" style="float: left;" src="<?php bloginfo('template_directory');?>/img//picto-logo/2.png" alt="numéro2"><p style="font-size: 20px;" class="card-text ">SO’Extrême s’engage et prend ses responsabilités en garantissant la qualité du matériel mis à disposition de nos clients
                  pour des expériences en sécurité.</p>
              </div>
            </div>
            <div class="card" style="margin-left:20px; margin-right:20px;">
              <div class="card-body">
                <h3 class="card-title text-center text-uppercase">Passion</h3>
                <img class="pr-3 pb-5 mb-5" style="float: left;" src="<?php bloginfo('template_directory');?>/img//picto-logo/3.png" alt="numéro3"><p style="font-size: 20px;" class="card-text ">Parce que nous pratiquons ce métier par passion, ce qui nous permet de
                  travailler un peu plus chaque jour pour proposer les meilleures expériences au meilleur prix.</p>
              </div>
            </div>
          </div>
        </section>
        <!-- NOS ENGAGEMENTS END -->



    </main>



  </div>



  <?php get_footer();?>
