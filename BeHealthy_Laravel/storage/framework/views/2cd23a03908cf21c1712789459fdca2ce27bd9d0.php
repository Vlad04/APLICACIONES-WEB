<!DOCTYPE html>
<html lang="en">
<head>
  <title>Be Healthy</title>
  <meta charset="utf-8" lang="es">
  <link rel="shortcut icon" type="image/png" href="favicon.ico"/>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/vue.resource/1.3.1/vue-resource.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.1.4/Chart.min.js"></script>
  <script src="https://www.gstatic.com/firebasejs/4.9.1/firebase.js"></script>

  <link rel="stylesheet" href="<?php echo e(asset('css/Styles.css')); ?>" type='text/css'>
  <link rel="stylesheet" href="<?php echo e(asset('css/animate.css')); ?>" type='text/css'>

  <script src="<?php echo e(asset('js/Script.js')); ?>"></script>

</head>
<body style="background-color: black;">
  <nav class="navbar navbar-inverse visible-xs" style="background-color: black;">
    <div class="container-fluid" id="sidebar">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#"><img src="<?php echo e(asset('img/heart64x64.png')); ?>" style="margin-left: 0px !important; width: 70%;" class="image"></a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li><a onclick="To_User()">User</a></li>
          <li><a onclick="To_Home()">Home</a></li>
          <li><a onclick="To_Stats()">Statistics</a></li>
          <li><a href="#">Excercises</a></li>
          <li><a onclick="To_Settings()">Configuration</a></li>
          <li><a href="#">Logout</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container-fluid" style="background: black url(http://cure.ae/wp-content/uploads/2016/10/exercise-outsi.jpg) no-repeat fixed center;">

    <div class="row content">
      <div class="col-sm-3 sidenav hidden-xs" style="background-color: black;">

        <ul class="nav nav-pills nav-stacked">
          <br>
          <li><a><img class="wow bounceIn image" data-wow-delay="0.2s" src="<?php echo e(asset('img/heart32x32.png')); ?>"/></a></li><hr style="color: #000000;">
          <li onclick="To_User()"><a><img class="wow bounceIn image" data-wow-delay="0.3s" src="<?php echo e(asset('img/User.png')); ?>" style="border: 0;" /></a></li>
          <li onclick="To_Home()"><a><img class="wow bounceIn image" data-wow-delay="0.4s" src="<?php echo e(asset('img/GreenHome.png')); ?>" style="border: 0;"/></a></li>
          <li onclick="To_Stats()"><a><img class="wow bounceIn image" data-wow-delay="0.5s" src="<?php echo e(asset('img/chart.png')); ?>" style="border: 0;"/></a></li>
          <li onclick="To_Routines()"><a><img class="wow bounceIn image" data-wow-delay="0.6s" src="<?php echo e(asset('img/excercise.png')); ?>" style="border: 0;" /></a></li>
          <li><a><img class="wow bounceIn image" data-wow-delay="0.7s" src="<?php echo e(asset('img/Hearts.png')); ?>" style="border: 0;" /></a></li>
          <li onclick="toMaps()"><a><img class="wow bounceIn image" data-wow-delay="0.8s" src="<?php echo e(asset('img/maps.png')); ?>" style="border: 0;" /></a></li>
          <li onclick=""><a><img class="wow bounceIn image" data-wow-delay="0.9s" src="<?php echo e(asset('img/power-button-off.png')); ?>" style="border: 0;"/></a></li>
        </ul><br>
      </div>
      <br>

      <div class="col-lg-11" id="Home"> <!-- Comienza el home -->
        <div class="well block">
          <h3>Comienza la semana con una nueva rutina</h3>
          <p>Crea un perfil con le cual te reomendaremos dietas según tus necesidades.</p>
        </div>

        <div class="row">
          <div class="col-sm-4 block">
            <div class="well" style="background: url(http://static.ellahoy.es/r/845X0/www.ellahoy.es/img/dietas-rapidas-adelgazar.jpg);">
              <h4>Comidas</h4>
              <p>Mira las recomendaciones que de brindamos para la semana.</p>
            </div>
          </div>

          <div class="col-sm-4 block">
            <div class="well" style="background: url(https://comenzandodecero.com/wp-content/uploads/2014/04/estad%C3%ADsticas-blogger.jpg);"">
              <h4>Estadísticas</h4>
              <p>Verifca y compara tus datos con respecto a semanas pasadas.</p>
            </div>
          </div>

          <div class="col-sm-4 block">
            <div class="well" style="background: url(https://www.hsnstore.com/blog/wp-content/uploads/2017/05/errores-con-pesas-rusas.jpg)">
              <h4>Ejecicios</h4>
              <p>Busca rutinas de ejecicio adecuadas a tu estilo de vida</p>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-8 block">
            <div class="well" style="background: url(http://exerciseright.com.au/wp-content/uploads/2018/02/shutterstock_103383071LR.jpg)">
              <h3>¿Estás buscando llevar tu carrera al siguiente nivel este año?</h3>
              <p>
                Tal vez ganar una carrera de carrera? ¿O tal vez solo obtener esa ventaja competitiva sobre tus amigos en una carrera divertida? Si es así, este es un DEBE LEER!.
              </p>
              <p>
                Es posible que ya esté familiarizado con el término Entrenamiento de fuerza o que haya leído anteriormente nuestra publicación en el blog ¿Qué es el Entrenamiento de fuerza? Una guía para principiantes ... Pero, ¿cómo afecta esto a tu capacidad para correr?....
              </p>
            </div>
          </div>


          <div class="col-sm-4">
            <div class="well">
              <p>Text</p>

            </div>
          </div>

        </div>

        <div class="row">
          <div class="col-md-8">
            <div class="well">
              <p>Text</p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="well">
              <p>Text</p>
            </div>
          </div>
        </div>
      </div>
<!-- Termina el Home -->

<!-- Comienza USER -->
      <div class="col-lg-11" id="User" style="display: none;"> <!-- Comienza USER -->
        <div class="row" style="padding: 2%;">
          <div class="col-sm-12">

            <div class="well row wow slideInRight">
              <div class="col-sm-2 ">
                <img src="<?php echo e(asset('img/UserDefault.png')); ?>">
              </div>

              <div class="col-sm-4">
                <h3> <?php echo e($users->nombre); ?></h3>
                <p style="font-style: italic;">Fecha de ingreso:  02 de mayo de 2018</p>
                <br>
                 <p style="font-style: italic;">Estatura:  <?php echo e($users->estatura); ?> centimetros</p>
                 <p style="font-style: italic;">Peso:  <?php echo e($users->peso); ?> Kilogramos</p>
                 <pstyle="font-style: italic;"> Indice de masa corporal:  <?php echo e(round(($users->peso / ($users->estatura*$users->estatura))*10000, 2)); ?></p>
              </div>

              <div class="col-sm-4">
                <h3>Interpretación</h3>
              	<p style="font-style: italic;">
                  El valor obtenido no es constante, sino que varía con la edad y el sexo. También depende de otros factores: La siguiente tabla representa una media de valores.
                </p>
                <img src="<?php echo e(asset('img/tabla_IMC.png')); ?>" style="width: 115%;">
              </div>
            </div>
          </div>
        </div>
      </div>
<!-- Termina USER -->

<!-- Empieza stars  -->
  	<div class="col-lg-11" id="Stats" style="display: none;">
    	<div class="row" style="padding: 2%;">
	      	 <div class="col-sm-12">
	          <div class="well row">

	            <div class="col-sm-2">
	              <label class="switch">
	                 <input type="checkbox" checked>
	                 <span class="slider round"></span>
	              </label>
	            </div>

	          </div>
	        </div>
      	</div>
	</div>

<!-- Termina stats  -->


  <div class="col-lg-11" id="Routines" style="display: none;">
    <div class="row" style="padding: 2%;" style="height: 120%;">
        <div class="col-sm-12">
          <div class="well row">
            <div class="col-sm-2">
              <li>
                <a href="#" data-toggle="modal" data-target="#exampleModal">
                  <span class="glyphicon">
                    <img src="<?php echo e(asset('img/chest_press.gif')); ?>">
                  </span>
                </a>
              </li>
            </div>

            <div class="col-sm-2">
              <li>
                <a href="#" data-toggle="modal" data-target="#exampleModal">
                  <span class="glyphicon">
                    <img src="<?php echo e(asset('img/bicepseagle.gif')); ?>">
                  </span>
                </a>
              </li>
            </div>

            <div class="col-sm-2">
              <li>
                <a href="#" data-toggle="modal" data-target="#exampleModal">
                  <span class="glyphicon">
                    <img src="<?php echo e(asset('img/copa.gif')); ?>">
                  </span>
                </a>
              </li>
            </div>

            <div class="col-sm-2">
              <li>
                <a href="#" data-toggle="modal" data-target="#exampleModal">
                  <span class="glyphicon">
                    <img src="<?php echo e(asset('img/costurera.gif')); ?>">
                  </span>
                </a>
              </li>
            </div>

            <div class="col-sm-2">
              <li>
                <a href="#" data-toggle="modal" data-target="#exampleModal">
                  <span class="glyphicon">
                    <img src="<?php echo e(asset('img/bicepseagle.gif')); ?>">
                  </span>
                </a>
              </li>
            </div>

         
            <div class="col-sm-2">
              <li>
                <a href="#" data-toggle="modal" data-target="#exampleModal">
                  <span class="glyphicon">
                    <img src="<?php echo e(asset('img/concentrado.gif')); ?>">
                  </span>
                </a>
              </li>
            </div>

          </div>
        </div>
      </div>

<div class="row" style="padding: 2%;" style="height: 120%;">
        <div class="col-sm-12">
          <div class="well row">
            <div class="col-sm-2">
              <li>
                <a href="#" data-toggle="modal" data-target="#exampleModal">
                  <span class="glyphicon">
                    <img src="<?php echo e(asset('img/legpress.gif')); ?>">
                  </span>
                </a>
              </li>
            </div>

            <div class="col-sm-2">
              <li>
                <a href="#" data-toggle="modal" data-target="#exampleModal">
                  <span class="glyphicon">
                    <img src="<?php echo e(asset('img/martillo.gif')); ?>">
                  </span>
                </a>
              </li>
            </div>

            <div class="col-sm-2">
              <li>
                <a href="#" data-toggle="modal" data-target="#exampleModal">
                  <span class="glyphicon">
                    <img src="<?php echo e(asset('img/remopiso.gif')); ?>">
                  </span>
                </a>
              </li>
            </div>

            <div class="col-sm-2">
               <li>
                <a href="#" data-toggle="modal" data-target="#exampleModal">
                  <span class="glyphicon">
                    <img src="<?php echo e(asset('img/remosentado.gif')); ?>">
                  </span>
                </a>
              </li>
            </div>

            <div class="col-sm-2">
              <li>
                <a href="#" data-toggle="modal" data-target="#exampleModal">
                  <span class="glyphicon">
                    <img src="<?php echo e(asset('img/sentadilla.gif')); ?>">
                  </span>
                </a>
              </li>
            </div>

         
            <div class="col-sm-2">

              <li>
                <a href="#" data-toggle="modal" data-target="#exampleModal">
                  <span class="glyphicon">
                    <img src="<?php echo e(asset('img/tricepsextension.gif')); ?>">
                  </span>
                </a>
              </li>
            </div>
          </div>
        </div>
      </div>




  </div>


<!-- Empieza Settings -->
    <div class="col-lg-11" id="Settings" style="display: none;">
      <div class="row" style="padding: 2%;">

        <div class="col-sm-12">
          <div class="well row">

            <div class="col-sm-2">
              <label class="switch">
                 <input type="checkbox" checked>
                 <span class="slider round"></span>
              </label>
            </div>

          </div>
        </div>

        <div class="col-sm-12">
          <div class="well row">

            <div class="col-sm-6">
              <canvas class="wow bounceIn" id="radar-chart" width="400" height="300"></canvas>
            </div>

          </div>
        </div>


      </div>
    </div>
<!-- Termina Settings -->
  </div>


  
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document" style="top: 100px;">
      <div class="modal-content">
        <div class="modal-header">
          <img src="<?php echo e(asset('img/Heart32x32.png')); ?>" style="display: block; margin: 0 auto;">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form class=""></form>
      </div>
    </div>
  </div>
</body>

</html>
