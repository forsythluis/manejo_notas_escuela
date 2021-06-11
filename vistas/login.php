<?php include("../templates/cabecera2.php") ;
 ?>

<div class="container mt-5 text-center" > <h5>Ingreso Al Sistema Estudiantil</h5></div>
<div class="container mt-5">
  <form method="POST"  action="../modelo/entrada.php">
        <div class="mb-3">
          <label for="email" class="form-label">Correo Electrónico</label>
          <input type="email" class="form-control" id="email" name="email" required>
        <div class="mb-3">
          <label for="clave" class="form-label">Clave de Ingreso</label>
          <input type="password" class="form-control" id="clave" name="clave" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>


<?php include("../templates/pie2.php"); ?>