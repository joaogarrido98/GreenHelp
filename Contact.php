<?php
session_start();
if (isset($_SESSION["lang"])) {
  $_SESSION['lang'];
} else {
  $_SESSION['lang'] = "en";
}
$menu = array(array("pt" => "Acerca", "en" => "About Us"), array("pt" => "Contacto", "en" => "Contact Us"));
$form = array(array("pt" => "Deixe uma Mensagem", "en" => "Leave a Message"), array("pt" => "E-mail enviado com sucesso", "en" => "E-mail sent with success"), array("pt" => "E-mail não enviado", "en" => "E-mail was not sent"));
$erro = array(array("pt" => "Insira um nome", "en" => "Insert a name"), array("pt" => "Insira um email", "en" => "Insert an email"), array("pt" => "Insira um numero de telefone", "en" => "Insert a phone number"), array("pt" => "Insira uma mensagem", "en" => "Insert a message"));
$send = array(array("pt" => "ENVIAR MENSAGEM", "en" => "SEND MESSAGE"), array("pt" => "A enviar..", "en" => "Sending.."));
$contact = array(array("pt" => "Endereço", "en" => "Address"), array("pt" => "Telefone", "en" => "Phone"));
$footer1 = array("pt" => "Somos uma empresa que tenta superar alguns problemas do mundo, a nossa primeira entrada no mercado é com o lançamento de GreenHelp. Espero que goste!", "en" => "We are an enterprise trying to overcome some of the world's problems, our first break into the market is by launching GreenHelp. Hope you like it");
$footer = array("en" => "Powered by:", "pt" => "Distribuido por:");
$footer2 = array(array("en" => "Navigate", "pt" => "Navegue"), array("en" => "Contacts", "pt" => "Contactos"));
$inside = array(array("en" => "Name*", "pt" => "Nome*"), array("en" => "Phone*", "pt" => "Telefone*"), array("en" => "Message*", "pt" => "Mensagem*"));
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <link href="resources/favicon.png" rel="icon" type="image/x-icon">
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/bootstrap-4.4.1-dist/css/bootstrap.min.css">
  <link href="css/aos.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,900&display=swap" rel="stylesheet">
  <link href="css/Contactus.css?version=34" rel="stylesheet">
  <title>GreenHelp</title>
</head>

<body>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top" id="banner">
    <div class="container">
      <a class="navbar-brand ml-3" href="index.php"><span>Green</span>Help</a>
      <button class="navbar-toggler collapsed" id="tog" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="icon-bar top-bar"></span>
        <span class="icon-bar middle-bar"></span>
        <span class="icon-bar bottom-bar"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.php">App</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="About.php"><?php echo $menu[0][$_SESSION['lang']]; ?></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="active" href="Contact.php"><?php echo $menu[1][$_SESSION['lang']]; ?></a>
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
      </div>
    </div>
  </nav>
  <!--contactForm-->
  <div class="contact mx-3" style="margin-top: 8rem;" data-aos="fade-down">
    <div class="row no-gutters">
      <div id="container" class="container shadow py-5 rounded-lg">
        <div class="row">
          <div class="col-lg-6"  data-aos="fade-down">
            <div class="card-shadow">
              <img src="resources/tele.jpg" class="img-fluid">
            </div>
          </div>
          <div class="col-lg-6"  data-aos="fade-down">
            <div class="contact-box ml-3">
              <h1 class="font-weight-light mt-2"><?php echo $form[0][$_SESSION['lang']]; ?></h1>
              <div id="emailsent" style="display: none; width: 85%;" class="alert alert-success" role="alert">
                <?php echo $form[1][$_SESSION['lang']]; ?>
              </div>
              <div id="emailnotsent" style="display: none; width: 85%;" class="alert alert-danger" role="alert">
                <?php echo $form[2][$_SESSION['lang']]; ?>
              </div>
              <form id="form" action="" method="POST" class="needs-validation mt-4" novalidate>
                <div class="row">
                  <div class="col-lg-12 col-md-12">
                    <div class="form-group mt-2">
                      <input class="form-control shadow" style="width: 85%;" type="text" placeholder="<?php echo $inside[0][$_SESSION['lang']]; ?>" id="name" name="name" required>
                      <div class="invalid-feedback">
                        <?php echo $erro[0][$_SESSION['lang']]; ?>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-12 col-md-12">
                    <div class="form-group mt-2">
                      <input class="form-control shadow" style="width: 85%;" type="email" placeholder="Email*" id="email" name="email" required>
                      <div class="invalid-feedback">
                        <?php echo $erro[1][$_SESSION['lang']]; ?>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-12 col-md-12">
                    <div class="form-group mt-2">
                      <input class="form-control shadow" style="width: 85%;" type="number" placeholder="<?php echo $inside[1][$_SESSION['lang']]; ?>" id="phone" name="phone" required>
                      <div class="invalid-feedback">
                        <?php echo $erro[2][$_SESSION['lang']]; ?>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-12 col-md-12">
                    <div class="form-group mt-2">
                      <textarea class="form-control shadow" style="width: 85%;" rows="4" placeholder="<?php echo $inside[2][$_SESSION['lang']]; ?>" id="message" name="message" required></textarea>
                      <div class="invalid-feedback">
                        <?php echo $erro[3][$_SESSION['lang']]; ?>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-12 col-md-12">
                    <button id="send" type="submit" class="btn btn-danger-gradiant mt-3 text-white border-0 px-3 py-2 shadow" name="submit"><span><?php echo $send[0][$_SESSION['lang']]; ?></span></button>
                    <button class="btn btn-danger-gradiant mt-3 text-white border-0 px-3 py-2 shadow" style="display: none;" id="spinner" disabled><?php echo $send[1][$_SESSION['lang']]; ?>
                      <span class="spinner-border spinner-border-sm"></span></button>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <div class="col-lg-12">
            <div class="card mt-4 border-2 shadow mb-4">
              <div class="row">
                <div class="col-lg-4 col-md-6">
                  <div class="card-body d-flex align-items-center c-detail">
                    <div class="mr-3 align-self-center">
                      <img src="resources/icon1.png">
                    </div>
                    <div>
                      <h6 class="font-weight-bold"><?php echo $contact[0][$_SESSION['lang']]; ?></h6>
                      <p>Lisboa, 2743-104
                        <br> São domingos de Rana</p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6">
                  <div class="card-body d-flex align-items-center c-detail">
                    <div class="mr-3 align-self-center">
                      <img src="resources/icon2.png">
                    </div>
                    <div>
                      <h6 class="font-weight-bold"><?php echo $contact[1][$_SESSION['lang']]; ?></h6>
                      <p>212 321 907
                        <br> 917 518 758</p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-12">
                  <div class="card-body d-flex align-items-center c-detail">
                    <div class="mr-3 align-self-center">
                      <img src="resources/icon3.png">
                    </div>
                    <div>
                      <h6 class="font-weight-bold">E-mail</h6>
                      <p class="w-75">greenhelpdigital@gmail.com</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--contactForm-->
  <button id="myBtn" title="Go to top">Top</button>
  <!--footer-->
  <footer style="background-color:rgba(220, 226, 220, 0.562); padding:5px; margin-top: 3em;">
    <div class="container text-center text-md-left mt-5 ">
      <div class="row mt-3">
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <h6 class="text-uppercase font-weight-bold">Global Techonologies</h6>
          <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 100px ; background-color: green;">
          <p><?php echo $footer1[$_SESSION['lang']]; ?></p>
        </div>
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <h6 class="text-uppercase font-weight-bold"><?php echo $footer2[0][$_SESSION['lang']]; ?></h6>
          <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 80px; background-color: green;">
          <p><a href="index.php" style="text-decoration: none;">App</a></p>
          <p><a href="About.php" style="text-decoration: none;"><?php echo $menu[0][$_SESSION['lang']]; ?></a></p>
          <p><a href="Contact.php" style="text-decoration: none;"><?php echo $menu[1][$_SESSION['lang']]; ?></a></p>
          <p><a href="http://localhost/GreenHelp_Admins" style="text-decoration: none;">Admins</a></p>
        </div>
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <h6 class="text-uppercase font-weight-bold"><?php echo $footer2[1][$_SESSION['lang']]; ?></h6>
          <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 80px; background-color: green;">
          <p>Lisboa, 2743-104, PT</p>
          <p>greenhelpdigital@gmail.com</p>
          <p>+351 917518758</p>
        </div>
      </div>
    </div>
    <div class="footer-copyright text-center pt-0 mt-0">© 2020 <?php echo $footer[$_SESSION['lang']]; ?> Global Techonologies</div>
  </footer>
  <!--footer-->
  <!--scripts-->
  <script src="js/jquery-3.4.1.min.js" type="text/javascript"></script>
  <script src="css/bootstrap-4.4.1-dist/js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="js/aos.js" type="text/javascript"></script>
  <script type="text/javascript" src="js/contact.js?version=4"></script>
  <script type="text/javascript" src="js/language.js?version=2"></script>
  <!--scripts-->
</body>

</html>