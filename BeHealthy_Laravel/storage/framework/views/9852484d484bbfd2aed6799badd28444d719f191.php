<!DOCTYPE html>
<html lang="en">
<title> Registro - Be Healthy</title>
<?php $__env->startSection('header'); ?>
  <body>
    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="navbar-header">

          <a class="navbar-brand wow bounceIn" href="#" style="font-family: 'Lobster', cursive; color: #87D050;font-size: 220%;">Be Healthy</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
        </div>
      </div>
    </nav>
    <div class="container">
      <h2><center style="font-family: 'Lobster', cursive; font-size: 220%;">Registrate</center></h2>
      <p style="font-family: 'Poppins', cursive; font-size: 160%;">Ingresa los datos correspondientes.</p>

      <form class="" action="<?php echo e(URL::to('store')); ?>" method="post">
        <div class="form-group">
          <label for="usr">Nombre completo:</label>
          <input type="text" class="form-control" name="name">
        </div>

        <hr>

         <div class="form-group">
          <label for="usr">E-mail:</label>
          <input type="text" class="form-control" name="email">
        </div>

        <div class="form-group">
          <label for="pwd">Contraseña:</label>
          <input type="password" class="form-control" name="password">
        </div>

        <hr>

        <p style="font-family: 'Poppins', cursive; font-size: 160%;"> En esta seccion pediremos algunos datos que definiran las rutinas de ejercicio, dietas y recomendaciones,  por lo que se pide ingresar lo datos correctamente.</p>

        <div class="form-group">
          <label for="pwd">Peso(Kg):</label>
          <input type="text" class="form-control" name="peso">
        </div>

         <div class="form-group">
          <label for="pwd">Estaura(cm):</label>
          <input type="text" class="form-control" name="estatura">
        </div>

        <div class="form-group">
          <label for="genero">sexo</label>
            <select name="genero">
              <optgroup label="sexo:">
                <option value="M">masculino</option>
                <option value="F">femenino</option>
              </optgroup>
            </select>
        </div>

        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
       <button type="submit" name="button">Login</button>
      </form>
    </div>
    <?php $__env->startSection('Footer'); ?>
  </body>
</html>

<?php echo $__env->make('Componets/Footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('Componets/Header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>