<!-- Slider -->
        <div id="home_carousel_banners" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#home_carousel" data-slide-to="0" class="active"></li>
                <li data-target="#home_carousel" data-slide-to="1"></li>
            </ol>
            
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active">
                    <img src="<?php echo URL; ?>public/img/banners/dog-banner8.jpg" alt="" />
                    <div class="carousel-caption">
                        <h2>Desde aqui cambiaras la vida de una mascota.</h2>
                        <p></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Slider fin-->

        <!-- Formulario Registro-->
    <div class="container content">
      <div class="row">
        <div class="col-md-9">
          <h1>Necesitamos que llenes lo siguiente... </h1>

          <form role="form" method="post" action="<?php echo URL;?>adopcion/registrar">
            <div class="form-group">
              <label for="InputEmail">Nombre</label>
              <input type="text" class="form-control" name="nombre_mascota" placeholder="Nombre:"/>
            </div>
            <div class="form-group">
              <label for="InputEmail">Edad</label>
              <input type="text" class="form-control" name="edad_mascota" placeholder="Edad:"/>
            </div>
            <div class="form-group">
              <label for="InputMesaagel">Descripción de la Mascota</label>
              <textarea class="form-control" name="mensaje_mascota"  placeholder="Describa algo lindo de la mascota" rows="8"></textarea>
            </div>
            <div class="form-group">
                    <select class="btn btn-default" id="select-1" name="id_animal">
                      <option selected="selected">¿Qué es?</option>
                      <option value="1">Perro</option>
                      <option value="2">Gato</option>
                    </select>
            </div>
            <div class="form-group">
              <select class="btn btn-default" id="select-1" name="id_sexo_animal">
                      <option selected="selected">Sexo</option>
                      <option value="1">Hembra</option>
                      <option value="2">Macho</option>
                    </select>
            </div>
            <div class="form-group">
              <select class="btn btn-default" id="select-1" name="id_raza">
                      <option selected="selected">Raza</option>
                      <option value="1">Afgano</option>
                      <option value="1">Husky Siberiano</option>
                      <option value="1">Corgi Gales Pembroke</option>
                      <option value="1">Pastor Aleman</option>
                      <option value="1">Cocker Americano</option>
                      <option value="1">Doberman</option>
                      <option value="1">Foxhound Ingles</option>
                      <option value="1">Pastor Belga</option>
                      <option value="1">Beagle</option>
                      <option value="1">Chow Chow</option>
                    </select>
            </div>
            <div class="form-group">
              <select class="btn btn-default" id="select-1" name="mascota_vacuna">
                      <option selected="selected">Vacunado</option>
                      <option value="Si">Si</option>
                      <option value="No">No</option>
                    </select>  
            </div>
            <input type="submit" class="btn btn-default btn-green"/>
          </form>
        </div>
      </div>
    </div>
        <!-- Fin Formulario Registro -->
        <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="FCMK3SAMWZ49J">
<input type="image" src="https://www.paypalobjects.com/es_XC/MX/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal, la forma más segura y rápida de pagar en línea.">
<img alt="" border="0" src="https://www.paypalobjects.com/es_XC/i/scr/pixel.gif" width="10" height="10">
</form>