<!DOCTYPE html>
<html lang="pt-br">
<head>
	
	<title>Projeto 05</title>
	<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
	<link href="<?= url('/assets/web/styleVehicles.css');?>" rel="stylesheet">
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0">
</head>
<body>
<?php 
$this->layout("_theme");
?>
 <section class="catalog" id="catalog">
      <div class="content2">
        <!-- <div class="title-wrapper-catalog">
          <p>Procure o que você precisa</p>
          <h3>Catálogo</h3>
        </div>
        <div class="filter-card">
          <input
            type="text"
            class="search-input"
            placeholder="Procure seu modelo favorito"
          />
          <button class="search-button">Busca</button>
        </div> -->
        <div class="card-wrapper">
          <?php 
                foreach ($cars as $car) {
                  ?>
                  <div class="card-item">
				            <img src="<?= url('imagens/clio.png');?>" alt="Car" />
				            <div class="card-content">
				            <h3><?= $car->brand . " " . $car->model . " " . $car->description . " - " . $car->year; ?></h3>
				            <h1 class="valor"><?= $car->price?></h1>
				            <button type="button">Ver detalhes</button>
				            </div>
			            </div>
                  <?php
              }
               ?>
  
      </div>
    </section>

    <!-- <section class="about" id="about">
      <div class="content">
        <div class="title-wrapper-about">
          <p>Know about us</p>
          <h3>About</h3>
        </div>
        <div class="about-content">
          <div class="left">
            <img src="images/about.png" alt="About" />
          </div>
          <div class="right">
            <h3>Join technology and mobility</h3>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Repudiandae ut inventore magni repellendus ab ad itaque facere. A
              tenetur quam, nobis tempore illum laborum ipsa fuga, itaque
              possimus repellat ad perspiciatis, velit reiciendis eos facilis
              sapiente blanditiis quas officia hic beatae quibusdam! Quod
              eligendi porro possimus voluptatum ad ipsum sapiente soluta,
              maiores nobis tenetur adipisci officiis nisi illum quae natus
              nostrum tempora accusantium blanditiis? Rem nesciunt illum
              dolorum, perferendis quos consequatur suscipit cumque fugiat alias
              sint repellat qui adipisci error est distinctio doloribus labore
              sunt modi eos odio quibusdam dicta. Dignissimos voluptate illum
              possimus quo. Ducimus repellat doloribus quisquam quidem?
            </p>
          </div>
        </div>
      </div>
    </section> -->

    <!-- <section class="features" id="features">
      <div class="content">
        <div class="title-wrapper-features">
          <p>What you can do</p>
          <h3>Features</h3>
        </div>
        <div class="feature-card-block">
          <div class="feature-card-item">
            <img src="images/feature-planet.png" alt="Feature" />
            <div class="feature-text-content">
              <h3>Title</h3>
              <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
            </div>
          </div>
          <div class="feature-card-item">
            <img src="images/feature-planet.png" alt="Feature" />
            <div class="feature-text-content">
              <h3>Title</h3>
              <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
            </div>
          </div>
          <div class="feature-card-item">
            <img src="images/feature-planet.png" alt="Feature" />
            <div class="feature-text-content">
              <h3>Title</h3>
              <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
            </div>
          </div>
          <div class="feature-card-item">
            <img src="images/feature-planet.png" alt="Feature" />
            <div class="feature-text-content">
              <h3>Title</h3>
              <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
            </div>
          </div>
          <div class="feature-card-item">
            <img src="images/feature-planet.png" alt="Feature" />
            <div class="feature-text-content">
              <h3>Title</h3>
              <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
            </div>
          </div>
          <div class="feature-card-item">
            <img src="images/feature-planet.png" alt="Feature" />
            <div class="feature-text-content">
              <h3>Title</h3>
              <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
            </div>
          </div>
        </div>
      </div>
    </section> -->

</body>
</html>