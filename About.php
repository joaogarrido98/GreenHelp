<?php
session_start();
if (isset($_SESSION["lang"])) {
  $_SESSION['lang'];
} else {
  $_SESSION['lang'] = "en";
}
?>
<?php
if ($_SESSION['lang'] == "en") {
  echo ('
  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="utf-8">
    <link href="resources/favicon.png" rel="icon" type="image/x-icon">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap-4.4.1-dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,900&display=swap" rel="stylesheet">
    <link href="css/aos.css" rel="stylesheet">
    <link href="css/About.css?version=10"rel="stylesheet">
    <title>GreenHelp</title>
  </head>
  <body>
  
    <!--navbar-->
    <nav class="navbar navbar-expand-md navbar-dark fixed-top" id="banner">
	<div class="container">
  <a class="navbar-brand ml-3" href="index.php"><span>Green</span>Help</a>
  <button id="navnav" class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
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
          <a class="nav-link" id="active" href="About.php">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Contact.php">Contact Us</a>
        </li>
        <li class="nav-item">
            <a class="nav-link">
              <select id="lang" name="lang">
               <option value="en" selected>en</option>
                  <option value="pt">pt</option>
              </select></a>
          </li>
        </ul>
    </div>
	</div>
</nav>
    <!--navbar-->
    <!--Welcomer-->
    <section class="about-us py-3 inload" id="about-us">
      <div class="container mt-5">
        <div class="row">
          <div class="col-md-6" data-aos="fade-down">
            <h1 style="color:#ffffff">Welcome!</h1>
            <h3>Know More About Us</h3>
            <hr style="border-width: 2px; border-color: rgba(44, 48, 41, 0.596);">
            <p class="text-justify">We are an app trying to change the world, we know about the problems that the earth is facing everyday and so, because of that we decided to create an enterprise fully commited to try and help in the biggest
            enviromental problems. For that to happen we thought to ourselves that we should become and create a Vegan and Vegetarian app for those who think alike.</p>
            <p class="text-justify">If you want to find a little more about us, what our goals are and what we do that helps, scrool down. You will not be disappointed with our work I can say that, for sure.</p>
          </div>
          <div id="roundtable" class="col-md-5 ml-md-auto mt-4"><img alt="" class="img-fluid" id="img" src="resources/aboutus.png" data-aos="fade-down"></div>
        </div>
      </div>
    </section>
    <!--Welcomer-->
  
     <!--goals-->
    <header class="bg-custom text-center py-3 mt-5"  data-aos="fade-down">
      <div class="container">
        <h1 class="font-weight-bold text-black">Goals</h1>
        <hr style="border-width: 3px; border-color: rgba(44, 48, 41, 0.596); width: 30%;">
      </div>
    </header>
    <div class="py-4 service-24" data-aos="fade-down">
      <div class="container">
          <div class="row wrap-service-24">
            <div class="col-lg-4 col-md-4">
                      <div class="card border-0 mb-4">
                          <div class="front">
                            <a class="card-hover py-4 text-center d-block rounded"> 
                              <img src="resources/help.png">
                              <h6 class="ser-title text">Help</h6>
                          </a>
                          </div>
                          <div class="back">
                            <a class="py-4 text-center d-block rounded"> 
                             <p class="px-3">We try our best everyday to make you feel that someone is looking after you and WE are! We hope that with this app you will feel that your eating life is a lot easier!</p>
                          </a>
                          </div>
                      </div>  
              </div>        
              <div class="column col-lg-4 col-md-4">
                <div class="card border-0 mb-4">
                  <div class="front">
                    <a class="card-hover py-4 text-center d-block rounded"> 
                      <img src="resources/creativity.png">
                      <h6 class="ser-title text">Creativity</h6>
                  </a>
                  </div>
                  <div class="back">
                    <a class="py-4 text-center d-block rounded"> 
                     <p class="px-3">Our team has a lot of creativity and not only we had the idea for restaurants and recipes, but also we are discovering and inventing brand new ideas every hour that goes by!</p>
                  </a>
                  </div>
              </div>      
            </div>
              <div class="column col-lg-4 col-md-4">
                <div class="card border-0 mb-4">
                  <div class="front">
                    <a class="card-hover py-4 text-center d-block rounded"> 
                      <img src="resources/functionality.png">
                      <h6 class="ser-title text">Functional</h6>
                  </a>
                  </div>
                  <div class="back">
                    <a class="py-4 text-center d-block rounded"> 
                     <p class="px-3">We make an effort day and night to make an app that works as perfectly as you would love to! We want to deliver an app that is not only fast and easy to work with but also pretty!</p>
                  </a>
                  </div>
              </div>      
              </div>
          </div>
              <div class="row wrap-service-24" style="margin-top: 11em;">
              <div class="col-lg-4 col-md-4">
                <div class="card border-0 mb-4">
                  <div class="front">
                    <a class="card-hover py-4 text-center d-block rounded"> 
                      <img src="resources/animals.png">
                      <h6 class="ser-title text">Animals</h6>
                  </a>
                  </div>
                  <div class="back">
                    <a class="py-4 text-center d-block rounded"> 
                     <p class="px-3">Protecting animals is one of our main goals here and that is why we are building this app, to encourage people to follow a Vegan/Vegetarian way.</p>
                  </a>
                  </div>
              </div>
              </div>
              <div class="column col-lg-4 col-md-4">
                <div class="card border-0 mb-4">
                  <div class="front">
                    <a class="card-hover py-4 text-center d-block rounded"> 
                      <img src="resources/sunny.png">
                      <h6 class="ser-title text">Enviroment</h6>
                  </a>
                  </div>
                  <div class="back">
                    <a class="py-4 text-center d-block rounded"> 
                     <p class="px-3">Over and over studies have shown that the environment is rapidly getting sick, it is our goal to try and improve its health so that we can have a better tomorrow.</p>
                  </a>
                  </div>
              </div>
              </div>
              <div class="column col-lg-4 col-md-4">
                <div class="card border-0 mb-4">
                  <div class="front">
                    <a class="card-hover py-4 text-center d-block rounded"> 
                      <img src="resources/lifestyle.png">
                      <h6 class="ser-title text">Lifestyle</h6>
                  </a>
                  </div>
                  <div class="back">
                    <a class="py-4 text-center d-block rounded"> 
                     <p class="px-3">This app is being developed for you, the user, we are trying to do something that improves your lifestyle with better recipes and healthier recipes for everyone.</p>
                  </a>
                  </div>
              </div>
              </div>
          </div>
        </div>
      </div>
  </div>
    <!--goals-->
  
    <!--meet the team-->
    <header class="bg-custom text-center py-3 mb-1" style="margin-top: 14em;"  data-aos="fade-down" >
      <div class="container">
        <h1 class="font-weight-bold text-black">Meet the Team</h1>
        <hr style="border-width: 3px; border-color: rgba(44, 48, 41, 0.596); width: 30%;">
      </div>
    </header>
    <div class="container"  data-aos="fade-down">
      <div class="row">
        <div class="col-xl-4 col-md-4 mb-6 mt-4" >
          <div class="card border-0 shadow">
            <img class="card-img-top" src="resources/Scan0002.jpg">
            <div class="card-body text-center">
              <h5 class="card-title mb-0">Gonçalo Ferreira</h5>
              <div class="card-text text-black-50">
                <span style="color: rgb(102, 102, 102);">Marketing</span><br>
                "Welcome to GreenHelp, I hope you can enjoy and embrace this experience we are developing!<br>
                If you have any questions about marketing it is me you come to.<br>
                Have lots of fun with this app"
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-md-4 mb-6 mt-4">
          <div class="card border-0 shadow">
            <img class="card-img-top" src="resources/joao.png">
            <div class="card-body text-center">
              <h5 class="card-title mb-0">João Garrido</h5>
              <div class="card-text text-black-50">
                <span style="color: rgb(102, 102, 102);">CEO/Developer/Founder</span><br>
                "At GreenHelp we see the world as it could be, an easier, better place for people like you!<br>
                Because of that we bring you this app to guide you into a better tomorrow.<br>
                As we say here: Enjoy the <span class="Green">Green</span>."
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-md-4 mb-6 mt-4">
          <div class="card border-0 shadow">
            <img class="card-img-top" src="resources/person2.jpg">
            <div class="card-body text-center">
              <h5 class="card-title mb-0">Sara Pereira</h5>
              <div class="card-text text-black-50">
                <span style="color: rgb(102, 102, 102);">Financial Adviser</span><br>
                "I was always interested in saving the animals, when I saw this opportunity I took it without a thought.<br>
                I cant say a lot about my job but i really like it.<br>
                The biggest change comes within."
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--meet the team-->
    <!--footer-->
    <footer style="background-color:rgba(220, 226, 220, 0.562); padding:5px; margin-top: 3em;">
      <div class="container text-center text-md-left mt-5">
        <div class="row mt-3">
          <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
            <h6 class="text-uppercase font-weight-bold">Global Techonologies</h6>
            <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto"
                style="width: 100px ; background-color: green;">
            <p>We are an enterprise trying to overcome some of the world is problems, our first break into the market is by launching GreenHelp. Hope you like it.</p>
          </div>
          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
            <h6 class="text-uppercase font-weight-bold">Navigate</h6>
            <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto"
                style="width: 80px; background-color: green;">
            <p><a href="index.php"
               style="text-decoration: none;">App</a></p>
            <p><a href="About.php"
               style="text-decoration: none;">About Us</a></p>
            <p><a href="Contact.php"
               style="text-decoration: none;">Contact Us</a></p>
               <p><a href="http://localhost/GreenHelp_Admins" style="text-decoration: none;">Admins</a></p>
          </div>
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
            <h6 class="text-uppercase font-weight-bold">Contact</h6>
            <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto"
                style="width: 80px; background-color: green;">
            <p>Lisboa, 2743-104, PT</p>
            <p>greenhelpdigital@gmail.com</p>
            <p>+351 917518758</p>
          </div>
        </div>
      </div>
      <button id="myBtn" title="Go to top">Top</button>
      <div class="footer-copyright text-center pt-0 mt-0">
        © 2020 Powered by: GlobalTechnologies
      </div>
    </footer>
    <!--footer-->
   <!-- scripts-->
   <script src="js/jquery-3.4.1.min.js" type="text/javascript"></script>
  <script src="css/bootstrap-4.4.1-dist/js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="js/aos.js" type="text/javascript"></script> 
  <script src="js/language.js" type="text/javascript"></script>
   <script src="js/about.js?version=1" type="text/javascript"></script>
   <!-- scripts-->
  </body>
  </html>');
} else {
  echo ('
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
    <link href="css/About.css?version=10"rel="stylesheet">
    <title>GreenHelp</title>
  </head>
  <body>
  
    <!--navbar-->
    <nav class="navbar navbar-expand-md navbar-dark fixed-top" id="banner">
	<div class="container">
  <a class="navbar-brand ml-3" href="index.php"><span>Green</span>Help</a>
  <button id="navnav" class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
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
          <a class="nav-link" id="active" href="About.php">Acerca</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Contact.php">Contacto</a>
        </li>
        <li class="nav-item">
            <a class="nav-link">
              <select id="lang" name="lang">
               <option value="en">en</option>
               <option value="pt" selected>pt</option>
              </select></a>
          </li>
      </ul>
    </div>
	</div>
</nav>
    <!--navbar-->
    <!--Welcomer-->
    <section class="about-us py-4 inload" id="about-us">
      <div class="container mt-4">
        <div class="row">
          <div class="col-md-6"  data-aos="fade-down">
            <h1 style="color:#ffffff">Bem-vindo!</h1>
            <h3>Descobre mais sobre nós</h3>
            <hr style="border-width: 2px; border-color: rgba(44, 48, 41, 0.596);">
            <p class="text-justify">Somos uma app que está a tentar mudar o mundo, sabemos dos problemas que a terra enfrenta todos os dias e, por isso, decidimos criar uma empresa totalmente comprometida em tentar ajudar nos maiores problemas ambientais. Para que isso acontecesse, pensámos que nos deveríamos tornar e criar uma aplicação com o tema vegan e vegetariano para quem pensa da mesma forma.</p>
            <p class="text-justify">Se quiser descobrir um pouco mais sobre nós, quais são nossos objetivos e o que fazemos, scroll down. Não vai ficar desapontado com o nosso trabalho, posso dizer isso, com certeza.</p>
          </div>
          <div  data-aos="fade-down" id="roundtable" class="col-md-5 ml-md-auto mt-4"><img alt="" class="img-fluid" src="resources/aboutus.png" id="img"></div>
        </div>
      </div>
    </section>
    <!--Welcomer-->
  
     <!--goals-->
     <header class="bg-custom text-center py-3 mt-5" data-aos="fade-down">
     <div class="container">
       <h1 class="font-weight-bold text-black ">Objectivos</h1>
       <hr style="border-width: 3px; border-color: rgba(44, 48, 41, 0.596); width: 30%;">
     </div>
   </header>
    <div class="py-4 service-24 module" data-aos="fade-down">
      <div class="container">
          <div class="row wrap-service-24">
            <div class="col-lg-4 col-md-6">
                      <div class="card shadow border-0 mb-4">
                          <div class="front">
                            <a class="card-hover py-4 text-center d-block rounded"> 
                              <img src="resources/help.png">
                              <h6 class="ser-title text">Ajuda</h6>
                          </a>
                          </div>
                          <div class="back">
                            <a class="py-4 text-center d-block rounded"> 
                             <p class="px-3">Tentamos o nosso melhor todos os dias para fazer com que sinta que alguém está a cuidar de você! Esperamos que, com esta app, sinta que sua vida alimentar é muito mais fácil e melhor!</p>
                          </a>
                          </div>
                      </div>  
              </div>        
              <div class="column col-lg-4 col-md-6">
                <div class="card shadow border-0 mb-4">
                  <div class="front">
                    <a class="card-hover py-4 text-center d-block rounded"> 
                      <img src="resources/creativity.png">
                      <h6 class="ser-title text">Criatividade</h6>
                  </a>
                  </div>
                  <div class="back">
                    <a class="py-4 text-center d-block rounded"> 
                     <p class="px-3">A nossa equipa tem muita criatividade e não tivemos apenas a ideia de restaurantes e receitas, mas também estamos a descobrir e a inventar novos temas a cada hora que passa!</p>
                  </a>
                  </div>
              </div>      
            </div>
              <div class="column col-lg-4 col-md-6">
                <div class="card shadow border-0 mb-4">
                  <div class="front">
                    <a class="card-hover py-4 text-center d-block rounded"> 
                      <img src="resources/functionality.png">
                      <h6 class="ser-title text">Funcional</h6>
                  </a>
                  </div>
                  <div class="back">
                    <a class="py-4 text-center d-block rounded"> 
                     <p class="px-3">Esforçamo-nos dia e noite para criar uma app que funcione perfeitamente, como você gosta! Queremos oferecer uma app que não seja apenas rápida e fácil de trabalhar, mas também bonita e sem erros!</p>
                  </a>
                  </div>
              </div>      
              </div>
          </div>
              <div class="row wrap-service-24" style="margin-top: 11em;">
              <div class="col-lg-4 col-md-6">
                <div class="card shadow border-0 mb-4">
                  <div class="front">
                    <a class="card-hover py-4 text-center d-block rounded"> 
                      <img src="resources/animals.png">
                      <h6 class="ser-title text">Animais</h6>
                  </a>
                  </div>
                  <div class="back">
                    <a class="py-4 text-center d-block rounded"> 
                     <p class="px-3">Proteger animais é um dos nossos principais objetivos aqui e é por isso que estamos a construir esta app, para incentivar as pessoas a seguir um estilo de vida vegan/vegetariana</p>
                  </a>
                  </div>
              </div>
              </div>
              <div class="column col-lg-4 col-md-6 ">
                <div class="card shadow border-0 mb-4">
                  <div class="front">
                    <a class="card-hover py-4 text-center d-block rounded"> 
                      <img src="resources/sunny.png">
                      <h6 class="ser-title text">Ambiente</h6>
                  </a>
                  </div>
                  <div class="back">
                    <a class="py-4 text-center d-block rounded"> 
                     <p class="px-3">Mais e mais estudos mostram que o ambiente está a ficar rapidamente doente, é nosso objetivo tentar melhorar a sua saúde para que possamos ter um futuro melhor.</p>
                  </a>
                  </div>
              </div>
              </div>
              <div class="column col-lg-4 col-md-6">
                <div class="card border-0 shadow mb-4">
                  <div class="front">
                    <a class="card-hover py-4 text-center d-block rounded"> 
                      <img src="resources/lifestyle.png">
                      <h6 class="ser-title text">Vida</h6>
                  </a>
                  </div>
                  <div class="back">
                    <a class="py-4 text-center d-block rounded"> 
                     <p class="px-3">Esta app está a ser desenvolvida para si, o utilizador, estamos a tentar fazer algo que melhore o seu estilo de vida com melhores receitas e receitas saudáveis para todos.</p>
                  </a>
                  </div>
              </div>
              </div>
          </div>
        </div>
      </div>
    <!--goals-->
  
    <!--meet the team-->
    <header class="bg-custom text-center py-3 mb-1" style="margin-top: 14em;" data-aos="fade-down">
      <div class="container">
        <h1 class="font-weight-bold text-black">Conheça a equipa</h1>
        <hr style="border-width: 3px; border-color: rgba(44, 48, 41, 0.596); width: 35%;">
      </div>
    </header>
    <div class="container" data-aos="fade-down">
      <div class="row">
        <div class="col-xl-4 col-md-4 mb-6 mt-4">
          <div class="card border-0 shadow">
            <img class="card-img-top" src="resources/Scan0002.jpg">
            <div class="card-body text-center">
              <h5 class="card-title mb-0">Gonçalo Ferreira</h5>
              <div class="card-text text-black-50">
                <span style="color: rgb(102, 102, 102);">Marketing</span><br>
                "Bem-vindo ao GreenHelp, espero que possa aproveitar esta experiência que estamos a desenvolver! <br> Se você tiver alguma dúvida sobre marketing, sou eu com quem fala. <br>Divirta-se muito com esta app"
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-md-4 mb-6 mt-4">
          <div class="card border-0 shadow">
            <img class="card-img-top" src="resources/joao.png">
            <div class="card-body text-center">
              <h5 class="card-title mb-0">João Garrido</h5>
              <div class="card-text text-black-50">
                <span style="color: rgb(102, 102, 102);">CEO/Programador/Fundador</span><br>
                "Na GreenHelp, vemos o mundo como poderia ser, um lugar mais fácil e melhor para pessoas como você!<br>Por isso, trazemos esta app para guiá-lo para um futuro melhor. <br> Como dizemos aqui: Aproveite o <span class="Green">Green</span>."
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-md-4 mb-6 mt-4">
          <div class="card border-0 shadow">
            <img class="card-img-top" src="resources/person2.jpg">
            <div class="card-body text-center">
              <h5 class="card-title mb-0">Sara Pereira</h5>
              <div class="card-text text-black-50">
                <span style="color: rgb(102, 102, 102);">Conselheira Financeira</span><br>
                "Eu tive sempre interessada em salvar os animais, quando vi esta oportunidade, saltei sem pensar. <br> Não posso dizer muito sobre o meu trabalho, mas gosto muito. <br> A maior mudança vem de dentro."
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--meet the team-->
    <button id="myBtn" title="Go to top">Top</button>
    <!--footer-->
    <footer style="background-color:rgba(220, 226, 220, 0.562); padding:5px; margin-top: 3em;">
      <div class="container text-center text-md-left mt-5">
        <div class="row mt-3">
          <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
            <h6 class="text-uppercase font-weight-bold">Global Techonologies</h6>
            <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto"
                style="width: 100px ; background-color: green;">
            <p>Somos uma empresa que tenta superar alguns problemas dos mundo, a nossa primeira entrada no mercado é com o lançamento de GreenHelp. Espero que goste!</p>
          </div>
          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
            <h6 class="text-uppercase font-weight-bold">Navegue</h6>
            <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto"
                style="width: 80px; background-color: green;">
            <p><a href="index.php"
               style="text-decoration: none;">App</a></p>
            <p><a href="About.php"
               style="text-decoration: none;">Acerca</a></p>
            <p><a href="Contact.php"
               style="text-decoration: none;">Contacto</a></p>
               <p><a href="http://localhost/GreenHelp_Admins" style="text-decoration: none;">Admins</a></p>
          </div>
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
            <h6 class="text-uppercase font-weight-bold">Contacto</h6>
            <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto"
                style="width: 80px; background-color: green;">
            <p>Lisboa, 2743-104, PT</p>
            <p>greenhelpdigital@gmail.com</p>
            <p>+351 917518758</p>
          </div>
        </div>
      </div>
      <div class="footer-copyright text-center pt-0 mt-0">
        © 2020 Distribuido por: Global Technologies
      </div>
    </footer>
    <!--footer-->
   <!-- scripts-->
   <script src="js/jquery-3.4.1.min.js" type="text/javascript"></script>
  <script src="css/bootstrap-4.4.1-dist/js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="js/aos.js" type="text/javascript"></script>  
  <script src="js/language.js" type="text/javascript"></script>
   <script src="js/about.js?version=2" type="text/javascript"></script>
   <!-- scripts-->
  </body>
  </html>');
}
?>