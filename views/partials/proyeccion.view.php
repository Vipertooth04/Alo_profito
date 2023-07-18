<!--
<div id="resultado">
  <div id="Imagen-izquierda">
  <div><img src="<?= $primer_profesor['imagen'] ?>"></div>
  </div>
  <div id="Informacion">
  <div><?= $primer_profesor['nombre'] ?></div>
  <div><?= $primer_profesor['descripcion'] ?></div>
  <div>
    <?php foreach($primer_profesor['especialidades'] as $esp) { ?>
              <?= $esp ?>-
    <?php } ?>
  </div>
  <div>
  <?php foreach($primer_profesor['titulos'] as $esp) { ?>
              <?= $esp ?>-
            <?php } ?>
  </div>
  <div>
  <?php foreach($primer_profesor['correos_electronicos'] as $esp) { ?>
              <?= $esp ?>-
            <?php } ?>
  </div>      
  </div>
</div>
  -->

<div class="resultado" id="resultado">
    <img src="<?= $primer_profesor['imagen'] ?>" alt="Imagen">
    <div class="Descripcion_profesor">
      <h2><?= $primer_profesor['nombre'] ?></h2>
      <p><?= $primer_profesor['descripcion'] ?></p>
        <div id="Contenedor_listas">
            <div id="Titulos">
                <h3>Títulos</h3>
                <ul>
                <?php foreach($primer_profesor['titulos'] as $esp) { ?>
                    <li> <?= $esp ?></li>
                        <?php } ?>
                </ul>
            </div>
            <div id="Linea-investigacion">
                <h3>Especialidades</h3>
                <ul>
                <?php foreach($primer_profesor['especialidades'] as $esp) { ?>
                    <li> <?= $esp ?></li>
                <?php } ?>
                </ul>
            </div>
        </div>
        <div id="correo_profesor">
            <img src="media/iconos/mail.png">
                <?php foreach($primer_profesor['correos_electronicos'] as $esp) { ?>
                    <?= $esp ?>
                <?php } ?>
        </div> 
    </div>
</div>