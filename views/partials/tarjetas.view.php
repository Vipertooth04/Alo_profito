
<?php foreach ($objetos_profesores as $prof) { ?>
  <form action="/router.php" method="get">
  <div class="col">
    <div class="card h-100">
      <div id="profe-6">
        <div class="image_profesores">
          <img src="<?= $prof['imagen'] ?>">
        </div>
        <div class="title">
          <h1><?= $prof['nombre'] ?></h1>
        </div>
        <div class="des">
          <h2>Linea de investigacion</h2>
          <p>
            <?php foreach($prof['especialidades'] as $esp) { ?>
              <?= $esp ?>-
            <?php } ?>
            .
          </p>
        </div>
      </div>
      <input type="hidden" value="<?= $prof['id'] ?>" name="prof_id">
      <button type="submit"  profe_id="0" class="button_ver_mas" onclick="showProfe(this)">Ver más</button>
    </div>
  </div>
  </form>
<?php } ?>
