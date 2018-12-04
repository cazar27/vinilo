<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="img/logovinilo.png">

    <title>Vinilo Cafe Pub</title>
    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/4.1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/4.1/examples/navbars/navbar.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/4.1/examples/starter-template/starter-template.css" rel="stylesheet">
    
    <link rel="stylesheet" href="custom.css">
  </head>

  <body>


    <nav class="navbar navbar-expand-md fixed-top">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsdegrados" aria-controls="navbarsdegrados" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars"></i>
      </button>
      <img src="img/viniloWhite.png" class="logonavmin" alt="home">
      <div class="collapse navbar-collapse justify-content-sm-center" id="navbarsdegrados">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="#today">
              TODAY
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#events">CONCERTS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#events">EVENTS</a>
          </li>
          <li class="nav-item logohome">
            <img class="logonav" src="img/viniloWhite.png" alt="vinilo home">
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#gallery">GALLERY</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#food">FOOD</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contact">BOOKING</a>
          </li>
          
          <li class="nav-item">
            <ul class="hde-social">
                <li><a href="mailto:info@carloszamorano.es" target="_blank"><i class="fas fa-envelope-square"></i></a></li>
                <li><a href="https://api.whatsapp.com/send?phone=34658429263" target="_blank"><i class="fab fa-whatsapp-square"></i></a></li>
                <li><a href="tel:0034658429263" target="_blank"><i class="fas fa-phone-square"></i></a></li>
            </ul>
          </li>
        </ul>
        <span class="target"></span>
      </div>
    </nav>

    <main role="main" class="container-fluid" id="fondo">

        <div class="starter-template">
            <div class="caption">
                <img class="logoentrada" src="img/viniloWhite.png" alt="Vinilo home">
                <h1>Welcome to Vinilo Cafe Pub</h1>
                <p class="lead">Come to meet us at our establishment.<br> Calle Salvador Vicente 28, Arroyo de la miel.</p>
                <p class="lead">We are open daily.<br> From to 8:00 p.m.</p>
            </div>
        </div>
    
    </main>

      <?php ?>
      <div class="container" id="today">
          <div class="row centerjustify">
            <h3><i class="fas fa-calendar-check"></i> 
              <?php
                echo 'Today is '.date('l jS \of F Y');
              ?>
            </h3>
            <div class="caption-info">
              <p>The <?php echo date('l')?> we have <?php echo 'Day of futbolin'; ?> specialy for you in Vinilo Cafe Pub you can enjoy with good company,
              the amazing music and the best cocktails, drinks and burguers of our local.<br> Remember, every <?php echo date('l')?> our <?php echo 'Day of futbolin'; ?>.
            </div>
            <div class="caption-info">
              <div class="row">
                <div class="col-sm-6">
                <img src="img/38963878_568642430217717_6208919566228127744_n.jpg" class="img-fluid" alt="Responsive image">
                </div>
                <div class="col-sm-6">
                <img src="img/36612657_202040557146583_2197062663110918144_n.jpg" class="img-fluid" alt="Responsive image">
                </div>
              </div>
            </div>
          </p>
          </div>

          <div id="gallery">
              <h3 class="text-center"><i class="fas fa-camera-retro"></i> GALLERY FROM INSTAGRAM</h3>
              <div class="container">
                <!-- LightWidget WIDGET -->
                <script src="https://cdn.lightwidget.com/widgets/lightwidget.js"></script>
                <iframe src="//lightwidget.com/widgets/569aaea88a1d52f7a1394b06d1c254ce.html" scrolling="no" 
                 class="lightwidget-widget" style="width:100%;border:0;overflow:hidden;"></iframe>
                <br>
                </div>
          </div>
      </div>
      
      <div class="container" id="events">
          <div>
            <h3 class="text-center"><i class="fas fa-drum"></i> NEXT EVENTS - CONCERTS</h3>
          </div>
          <div>
          
            <div class="row info">
              <div class="col-md-6 photoconcert">  
                <img src="img/39410879_2206811136218511_5149878775332208640_n.jpg" class="img-fluid posterconcert" alt="Responsive image">
              </div>
              <div class="col-md-6">
                <h2 class="dayofconcert">FRIDAY</h2>
                <h5>THE THUNDERS</h5>
                <p>Grupo Homenaje a la mítica AC/DC.</p>
                <div class="btn-right">
                  <ul class="hde-social">
                    <li><a href="https://api.whatsapp.com/send?phone=34658429263" target="_blank"><i class="fab fa-whatsapp-square"></i></a></li>
                    <li><a href="https://facebook.com" target="_blank"><i class="fab fa-facebook-square"></i></a></li>
                    <li><a href="https://instagram.com" target="_blank"><i class="fab fa-instagram"></i></i></a></li>
                  </ul>
                  <button class="btn btn-danger btn-concert">MORE</button>
                </div>
              </div>
            </div>
                
            <div class="row info">
              <div class="col-md-6 photoconcert">      
                <img src="img/37415989_287710558657973_1603745109063499776_n.jpg" class="img-fluid posterconcert" alt="Responsive image">
              </div>
              <div class="col-md-6">
                <h2 class="dayofconcert">SATURDAY</h2>
                  <h5>ANOTHER FUCKING BAND</h5>
                  <p>Ellos no son otra jodida banda de rock mas, esta banda maca tendencia.</p>
                  <div class="btn-right">
                    <ul class="hde-social">
                      <li><a href="https://api.whatsapp.com/send?phone=34658429263" target="_blank"><i class="fab fa-whatsapp-square"></i></a></li>
                      <li><a href="https://facebook.com" target="_blank"><i class="fab fa-facebook-square"></i></a></li>
                      <li><a href="https://instagram.com" target="_blank"><i class="fab fa-instagram"></i></i></a></li>
                    </ul>
                    <button class="btn btn-danger btn-concert">MORE</button>
                  </div>
                </div>
              </div>
          </div> 
      </div>

      <div class="container">
        <div class="row centerjustify">
          <h2 class="text-center margin">Marintencionados en Vinilo!!</h2>
          <div class="caption-info">

            <iframe src="https://www.facebook.com/plugins/video.php?href=https%3A%2F%2Fwww.facebook.com%2Fvinilocafepubbenalmadena%2Fvideos%2F228768271329301%2F&show_text=0"
              class="responsive" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowFullScreen="false"></iframe>              
          </div>
        </div>
      </div>
      
      <div class="container">
        <div class="row">
          <div class="col-sm-4">
            <img src="img/35532565_2024934377767465_6528256346100334592_n.jpg" class="img-fluid" alt="Responsive image">
          </div>
          <div class="col-sm-4">
            <img src="img/20634797_1716283352006269_7465738945360297984_n.jpg" class="img-fluid" alt="Responsive image">
          </div>
          <div class="col-sm-4" id="contact">
            <img src="img/35378574_207815963196068_6812084956299264000_n.jpg" class="img-fluid" alt="Responsive image">
          </div>
        </div>
        <div class="row">
          <div class="col-md-8">
            <h3><i class="fas fa-pen-fancy"></i> Contact or Booking</h3>

            <form class="form">
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="inputEmail4">Email</label>
                  <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                </div>
                <div class="form-group col-md-6">
                  <label for="inputName">Name</label>
                  <input type="text" class="form-control" id="inputName" placeholder="Name">
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="inputPhone">Phone Number</label>
                  <input type="number" class="form-control" id="inputPhone" placeholder="Phone Number">
                </div>
                <div class="form-group col-md-6">
                  <label for="inputState">Subjet</label>
                  <select id="inputState" class="form-control">
                    <option selected>Choose...</option>
                    <option>Contact</option>
                    <option>Booking</option>
                    <option>Private Party</option>
                    <option>Birthday Party</option>
                    <option>Other</option>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label for="inputMessage">Message</label>
                <input type="text" class="form-control" id="inputMessage" placeholder="Hello I´m ...">
              </div>
              <div class="form-btn">
                <button type="submit" class="btn btn-danger">Send Message</button>
              </div>
            </form>
          </div>
          <div class="col-md-4">
            <h3 class="textright"><i class="fas fa-map-marked-alt"></i> Location</h3>
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12811.31142853342!2d-4.5339479!3d36.6064548!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x8351b8d82f4ceb4b!2sVinilo+Caf%C3%A9+Pub!5e0!3m2!1ses!2ses!4v1539561545484" width="100%" height="250px" frameborder="0" style="border:0" allowfullscreen></iframe>
          </div>
          </div>

        </div>
      </div>
        
      </div>
      <div class="container-fluid">
      <div class="row slider">
            <div class="col-sm-4">
              <img src="img/36762967_2178188722417836_2429685148493545472_n.jpg" class="img-fluid" alt="Responsive image">
            </div>
            <div class="col-sm-4">
            <img src="img/11850105_1492142054411487_1085935870_n.jpg" class="img-fluid" alt="Responsive image">
            </div>
            <div class="col-sm-4">
            <img src="img/40301510_129769527970796_6970961750024149804_n.jpg" class="img-fluid" alt="Responsive image">
            </div>
          </div>
        
      </div>  
      <footer class="footer">
        <div class="container">
          <div class="row">
            <div class="col-sm-4 col-xs-12">
              <h5 class="text-center infofooter">CONTACT US<h5>
              <ul class="hde-social">
                  <li><a class="mail" href="mailto:info@carloszamorano.es" target="_blank"><i class="fas fa-envelope-square"></i></a></li>
                  <li><a class="whats" href="https://api.whatsapp.com/send?phone=34658429263" target="_blank"><i class="fab fa-whatsapp-square"></i></a></li>
                  <li><a class="call" href="tel:0034658429263" target="_blank"><i class="fas fa-phone-square"></i></a></li>
              </ul>
            </div>
            <div class="col-sm-4 col-xs-12">
                <img class="logofot" src="img/viniloWhite.png" alt="vinilo home">
                <h5 class="text-center">VINILO CAFE PUB</h5>
            </div>
            <div class="col-sm-4 col-xs-12">
              <h5 class="text-center infofooter">FOLLOW US<h5>
              <ul class="hde-social">
                  <li><a class="face" href="https://facebook.com" target="_blank"><i class="fab fa-facebook-square"></i></a></li>
                  <li><a class="insta" href="https://instagram.com" target="_blank"><i class="fab fa-instagram"></i></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </footer>    

      <!-- Bootstrap core JavaScript
      ================================================== -->
      <!-- Placed at the end of the document so the pages load faster -->
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
      <script src="https://getbootstrap.com/docs/4.1/assets/js/vendor/popper.min.js"></script>
      <script src="https://getbootstrap.com/docs/4.1/dist/js/bootstrap.min.js"></script>
      <script src="custom.js"></script>
  
  </body></html>

  