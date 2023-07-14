<?php foreach ($objetos_profesores as $prof) { ?>
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
              <?= $esp ?> ,
            <?php } ?>
            .
          </p>
        </div>
      </div>
      <button profe_id="6" onclick="showProfe(this)" class="button_ver_mas">Ver más</button>
    </div>
  </div>
<?php } ?>
