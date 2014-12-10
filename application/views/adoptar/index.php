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
                    <img src="<?php echo URL; ?>public/img/banners/dog-banner7.jpg" alt="" />
                    <div class="carousel-caption">
                        <h2>Un mascota te espera en tu hogar</h2>
                        <p></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Slider fin-->

<!-- Adoption -->
    <div class="container">
      <div class="row">
        <div class="col-md-12 centered">
          <h3><span>Centro de Adopción</span></h3>
          <p>Te presentamos los amigos que necesitan un hogar.</p>
        </div>
      </div>
    </div>
    <!-- Adoption end -->
    <!-- Carousel -->
    <div id="c-carousel">
      <div id="wrapper">
        <div id="carousel">
          <div>
            <a href="<?php echo URL; ?>animal/index" title="Dog" data-hover="Panchito! :D">
              <img src="<?php echo URL; ?>public/img/featured-1.png"/>
            </a>
          </div>
          <div>
            <a href="<?php echo URL; ?>animal/index" title="Dog" data-hover="Borat">
              <img src="<?php echo URL; ?>public/img/featured-2.png"/>
            </a>
          </div>
          <div>
            <a href="<?php echo URL; ?>animal/index" title="Dog" data-hover="Daniel">
              <img src="<?php echo URL; ?>public/img/featured-3.png"/>
            </a>
          </div>
          <div>
            <a href="<?php echo URL; ?>animal/index" title="Dog" data-hover="Bofo">
              <img src="<?php echo URL; ?>public/img/featured-1.png"/>
            </a>
          </div>
          <div>
            <a href="<?php echo URL; ?>animal/index" title="Dog" data-hover="Ruffo">
              <img src="<?php echo URL; ?>public/img/featured-2.png"/>
            </a>
          </div>
          <div>
            <a href="<?php echo URL; ?>animal/index" title="Dog" data-hover="Jack">
              <img src="<?php echo URL; ?>public/img/featured-3.png"/>
            </a>
          </div>
        </div>
        <div id="pager" class="pager"></div>
      </div>
    </div>
    <!-- Carousel end -->
    <!-- Adoption lista -->
    <div class="container">
      <div class="row">
	<h2> Mascotas Actualmente en Adopción</h2>
        <table>
        <?php
        if ($this->adopta) {
            foreach($this->adopta as $key => $value) {
                echo '<tr>';
                echo '<td>' . htmlentities($value->nombre_mascota) . '</td>';
                echo '<td><a href="'. URL . 'adoptar/mascota/' . $value->id_registro.'"> Ver Perfil </a></td>';
                //echo '<td><a href="'. URL . 'note/delete/' . $value->note_id.'">Delete</a></td>';
                echo '</tr>';
            }
        } else {
            echo 'No hay Mascotas en Adopcion !';
        }
    ?>
    </table>
        </div>
    </div>
  
    <!-- Adoption -->
    <div class="container">
      <div class="row">
        <div class="col-md-12 centered">
          <h3><span>Encuentra una perfecta compañia</span></h3>
          <p>¿Conoces las razas que existen en el mundo?</p>
        </div>
      </div>
      <div class="row adoption">
        <div class="col-md-4">
          <a href="adoption-single.html" title=""><img src="<?php echo URL; ?>public/img/dog-4.png" alt="Saint Bernard" /></a>
          <div class="title">
            <h5>
              <span data-hover="Saint Bernard">Saint Bernard</span>
            </h5>
          </div>
        </div>
        <div class="col-md-4">
          <a href="adoption-single.html" title="Beagle"><img src="<?php echo URL; ?>public/img/dog-5.png" alt="Beagle" /></a>
          <div class="title">
            <h5>
              <span data-hover="Beagle">Beagle</span>
            </h5>
          </div>
        </div>
        <div class="col-md-4">
          <a href="adoption-single.html" title="Staffordshire Bull Terrier"><img src="<?php echo URL; ?>public/img/dog-6.png" alt="Staffordshire Bull Terrier" /></a>
          <div class="title">
            <h5>
              <span data-hover="Staffordshire Bull Terrier">Staffordshire Bull Terrier</span>
            </h5>
          </div>
        </div>
        <div class="col-md-4">
          <a href="adoption-single.html" title="King Charles Cavalier"><img src="<?php echo URL; ?>public/img/dog-7.png" alt="King Charles Cavalier" /></a>
          <div class="title">
            <h5>
              <span data-hover="King Charles Cavalier">King Charles Cavalier</span>
            </h5>
          </div>
        </div>
        <div class="col-md-4">
          <a href="adoption-single.html" title="Dachshund"><img src="<?php echo URL; ?>public/img/dog-8.png" alt="Dachshund" /></a>
          <div class="title">
            <h5>
              <span data-hover="Dachshund">Dachshund</span>
            </h5>
          </div>
        </div>
        <div class="col-md-4">
          <a href="adoption-single.html" title="French Bulldog"><img src="<?php echo URL; ?>public/img/dog-9.png" alt="French Bulldog" /></a>
          <div class="title">
            <h5>
              <span data-hover="French Bulldog">French Bulldog</span>
            </h5>
          </div>
        </div>
      </div>
    </div>
    <!-- Adoption end -->
    <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="FCMK3SAMWZ49J">
<input type="image" src="https://www.paypalobjects.com/es_XC/MX/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal, la forma más segura y rápida de pagar en línea.">
<img alt="" border="0" src="https://www.paypalobjects.com/es_XC/i/scr/pixel.gif" width="10" height="10">
</form>