<?php
session_start();
if (isset($_SESSION["lang"])) {
  $_SESSION['lang'];
} else {
  $_SESSION['lang'] = "en";
}
$title2 = array("en" => "Discover", "pt" => "Descubra");
$title1 = array("en" => "Food!", "pt" => "Comida!");
$title3 = array("en" => "Health!", "pt" => "Bem-estar!");
$title4 = array("en" => "Life!", "pt" => "Vida!");
$menu = array(array("pt" => "Acerca", "en" => "About Us"), array("pt" => "Contacto", "en" => "Contact Us"));
$description = array("en" => "We are here to make a difference between your old life and your new and improved one. We are a trusty good friend.", "pt" => "Estamos aqui para fazer a diferença entre a sua vida antiga e a nova e melhorada. Somos um bom amigo e de confiança.");
$flag = array("en" => "flag-icon flag-icon-us", "pt" => "flag-icon flag-icon-pt");
$appfeatures = array("en" => "Features", "pt" => "Funcionalidades");
$appfeaturessub = array("en" => "This app has a lot of cool features for you to use on your day-to-day, this will help you so much on discovering where or what you are going to eat.", "pt" => "Esta aplicação tem muitos recursos interessantes para usar no dia-a-dia. Vai ajudá-lo a descobrir onde ou o que vai comer.");
$featurestitle = array(array("en" => "Restaurants", "pt" => "Restaurantes"), array("en" => "Recipes", "pt" => "Receitas"), array("en" => "Shopping List", "pt" => "Lista de Compras"), array("en" => "Share", "pt" => "Partilhar"), array("en" => "Reviews", "pt" => "Criticas"), array("en" => "Account", "pt" => "Conta"));
$featurescontent = array(array("en" => "Check all the best vegan and vegetarian restaurants on the planet", "pt" => "Visite todos os melhores restaurantes vegan e vegetarianos no globo"), array("en" => "Make all the best vegan and vegetarian recipes on the planet", "pt" => "Faça todas as melhores receitas vegan e vegetarianas no globo"), array("en" => "Create your own shopping list or add the recipes ingredients to it", "pt" => "Crie a sua lista de compras ou adicione os ingredientes das receitas"), array("en" => "Share the recipes and restaurants with yout friends", "pt" => "Partilhe as receitas e restaurantes com os seus amigos"), array("en" => "Review recipes and restaurants so that the community can enjoy the best", "pt" => "Avalie as receitas e os restaurantes para a comunidade ter o melhor"), array("en" => "Create your own account, like and rate all the recipes and restaurants", "pt" => "Crie a sua conta, goste e avalie as receitas e restaurantes"));
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="css/bootstrap-4.4.1-dist/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,900&display=swap" rel="stylesheet">
  <link href="css/aos.css" rel="stylesheet">
  <link rel="stylesheet" href="css/index.css?version=8">
  <link href="resources/favicon.png" rel="icon" type="image/x-icon">
  <title>GreenHelp</title>
</head>
<body>
  <div id="particles-js"></div>
  <!-- ======= end navbar ======= -->
  <nav class="navbar navbar-expand-md navbar-dark fixed-top" id="banner">
    <div class="container">
      <a class="navbar-brand" href="index.php"><span>Green</span>Help</a>
      <button id="navnav" class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="icon-bar top-bar"></span>
        <span class="icon-bar middle-bar"></span>
        <span class="icon-bar bottom-bar"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" id="active" href="index.php">App</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="About.php"><?php echo $menu[0][$_SESSION['lang']];?></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Contact.php"><?php echo $menu[1][$_SESSION['lang']];?></a>
          </li>
          <li class="nav-item">
            <a class="nav-link">
              <select id="lang" name="lang">
                <?php
                if (!isset($_SESSION['lang']) || $_SESSION['lang'] == "en") {
                  echo ('<option value="en" selected>en</option>');
                  echo ('<option value="pt">pt</option>');
                } else if ($_SESSION['lang'] == "pt") {
                  echo ('<option value="en">en</option>');
                  echo ('<option value="pt" selected>pt</option>');
                }
                ?>
              </select></a>
          </li>
        </ul>
        </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- ======= end navbar ======= -->
  <!-- ======= Content ======= -->
  <section id="first" class="d-flex align-items-center">
    <div class="container">
      <div class="row">
        <div data-aos="fade-down" id="discover" class="col-lg-7 d-lg-flex flex-lg-column justify-content-center align-items-stretch pt-5 pt-lg-0 order-2 order-lg-1">
          <div>
            <h1 id="h1"><?php echo $title2[$_SESSION['lang']];?>
            <div class="div">
              <span class="span"><?php echo $title1[$_SESSION['lang']];?><br><?php echo $title3[$_SESSION['lang']];?><br><?php echo $title4[$_SESSION['lang']];?><br></span>
            </div>
            </h1>
            <h2 class="col-lg-10"><?php echo $description[$_SESSION['lang']];?></h2>
            <a href="resources/app-debug.apk" download><button class="btn_dnw">Download Apk</button></a>
            <a href="resources/manual.pdf" download><button class="btn_dnw">Download Manual</button></a>
          </div>
        </div>
        <div class="col-lg-5 col-lg-offset-2 d-lg-flex flex-lg-column align-items-stretch order-1 order-lg-2 hero-img" data-aos="fade-down">
          <img src="resources/phonesnew.png" class="img-fluid" alt="">
        </div>
      </div>
    </div>
  </section>
  <main id="main" style="margin-bottom:4em;">
    <!-- ======= App Features Section ======= -->
    <section id="features" class="features">
      <div class="container">
        <div class="section-title" data-aos="fade-down">
          <h1><?php echo $appfeatures[$_SESSION['lang']]; ?></h1>
          <p><?php echo $appfeaturessub[$_SESSION['lang']]; ?></p>
        </div>
        <div class="row no-gutters">
          <div class="col-xl-7 d-flex align-items-stretch order-2 order-lg-1">
            <div class="content d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-md-6 icon-box" data-aos="fade-down">
                  <i class="bx bx-restaurant i"></i>
                  <h4><?php echo $featurestitle[0][$_SESSION['lang']]; ?></h4>
                  <p class="feat"><?php echo $featurescontent[0][$_SESSION['lang']]; ?></p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-down" data-aos-delay="100">
                  <i class="bx bx-food-menu"></i>
                  <h4><?php echo $featurestitle[1][$_SESSION['lang']]; ?></h4>
                  <p class="feat"><?php echo $featurescontent[1][$_SESSION['lang']]; ?></p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-down" data-aos-delay="200">
                  <i class="bx bx-receipt"></i>
                  <h4><?php echo $featurestitle[2][$_SESSION['lang']]; ?></h4>
                  <p class="feat"><?php echo $featurescontent[2][$_SESSION['lang']]; ?></p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-down" data-aos-delay="300">
                  <i class="bx bx-share-alt"></i>
                  <h4><?php echo $featurestitle[3][$_SESSION['lang']]; ?></h4>
                  <p class="feat"><?php echo $featurescontent[3][$_SESSION['lang']]; ?></p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-down" data-aos-delay="400">
                  <i class="bx bx-comment-detail"></i>
                  <h4><?php echo $featurestitle[4][$_SESSION['lang']]; ?></h4>
                  <p class="feat"><?php echo $featurescontent[4][$_SESSION['lang']]; ?></p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-down" data-aos-delay="500">
                  <i class="bx bx-id-card"></i>
                  <h4><?php echo $featurestitle[5][$_SESSION['lang']]; ?></h4>
                  <p class="feat"><?php echo $featurescontent[5][$_SESSION['lang']]; ?></p>
                </div>
              </div>
            </div>
          </div>
          <div class="image no-gutters ml-md-auto col-lg-4 px-4 d-flex align-items-stretch order-1 order-lg-2" data-aos="fade-down">
            <img src="resources/demand.svg" class="img-fluid" alt="">
          </div>
        </div>
      </div>
    </section>
  </main>
  <!-- ======= content ======= -->
  <!-- ======= scripts ======= -->
  <script src="js/jquery-3.4.1.min.js" type="text/javascript"></script>
  <script src="css/bootstrap-4.4.1-dist/js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="js/language.js" type="text/javascript"></script>
  <script src="js/aos.js" type="text/javascript"></script>
  <script src="js/index.js?version=2" type="text/javascript"></script>
  <script src="js/particles.js" type="text/javascript"></script>
  <script src="js/app.js" type="text/javascript"></script>
  <!-- ======= scripts ======= -->
</body>

</html>