@extends ('Componets.Footer')
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Be Healthy</title>
  <meta charset="utf-8">
  <link rel="shortcut icon" type="image/png" href="favicon.ico"/>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://www.gstatic.com/firebasejs/4.9.1/firebase.js"></script>
  <script type="text/javascript" src="{{ asset('js/LandingPage.js') }}"></script>

  <link rel="stylesheet" type="text/css" href="{{ asset('css/login.css') }}">
  <link rel="stylesheet" href="{{ asset('css/animate.css') }}" type='text/css'>
</head>

<body>
  <nav class="navbar navbar-inverse" style="top: 0px; height: 65px;">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>                        
        </button>
        <a class="navbar-brand wow bounceIn" href="#" style="font-family: 'Lobster', cursive; color: #87D050;font-size: 220%;">Be Healthy</a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav"> </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#" data-toggle="modal" data-target="#exampleModal"><span class="glyphicon glyphicon-log-in"></span> Inicia sesión</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner" role="listbox" style="bottom: 20px;">

      <div class="item active" style="height: 600px; max-height: 600px;"> <!-- Cuando la pantalla es grande  -->
        <video autoplay muted loop>
          <source src="https://8fit.com/app/uploads/2017/09/test_website-header_B.mp4" type="video/mp4">
        </video>

        <div class="carousel-caption">
          <img class="wow pulse" data-wow-delay="0.8s" src="{{ asset('img/heart256x256 (2).png') }}" style="max-height: 35%; max-width: 35%">
          <h3 style=" font-family: 'Lobster', cursive;font-size: 420%;">Fitness al alcance de todos</h3>
          <p style="font-size: 150%;">Crea o inicia sesión y observa los diversos servicio que ofrecemos</p>

          <button type="button" class="btn peach-gradient btn-lg" style="background-color: #87D050;" onclick="toRegister()">Registrate ya!!</button>

        </div>      
      </div>
    </div>
  </div>
    
  <div class="container text-center">    
    <h1 style="font-family: 'Lobster', cursive;">Como funciona</h1><br>
    <div class="row">

      <div class="col-sm-4">     
        <img src="{{ asset('img/cutlery.png') }}" class="wow bounceIn"> 
        <h2>Planes de comida adecuado para tí</h2>
        <p>Nuestros entrenamientos de alta intensidad se pueden realizar en cualquier lugar, en cualquier momento y te llevarán menos tiempo que entrenar en el gimnasio.</p>
      </div>

      <div class="col-sm-4"> 
        <img src="{{ asset('img/dumbbell.png') }}" class="wow bounceIn">
        <h2>Entrenamientos rápidos y efectivos</h2>
        <p>Te ofrecemos planes de comida que realmente funcionan. Planes personalizados hasta el último ingrediente.</p>    
      </div>

      <div class="col-sm-4">
        <img src="{{ asset('img/shopping-list.png') }}" class="wow bounceIn">
        <h2>Alcanza tu objetivo</h2>
        <p> Registramos todos tus resultados para que puedas concentrarte en convertirte en la mejor versión de ti mismo.</p>
      </div>

    </div>
  </div><br>

    {{-- MODAL --}}
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document" style="top: 100px;">
        <div class="modal-content">
          <div class="modal-header">
            <img src="{{ asset('img/Heart32x32.png') }}" style="display: block; margin: 0 auto;">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>

          <form class="" action="{{URL::to('logs')}}" method="post">
                    <input type="text" name="name" placeholder="Enter name" value="">
                    <br>
                    <br>
                    <input type="password" name="password" placeholder="Enter password" value="">
                    <br>
                    <br>
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <br>
                    <br>
                    <button type="submit" name="button">Login</button>
                </form>
          </div>
        </div>
      </div>
    </div>

@section('Footer')
</body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
<script type="text/javascript">
    new WOW().init();
</script>

</html>